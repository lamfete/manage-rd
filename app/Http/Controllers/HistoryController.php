<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoryReksadana as History;
use Response;

class HistoryController extends Controller
{
    public function index() {
        $histories = History::all();
        return Response::json([
            'data' => $this->transformCollection($histories)
        ], 200);
    }

    public function show($id) {
        $history = History::find($id);

        if(!$history) {
            return Response::json([
                'error' => [
                    'message' => 'History does not exist'
                ]
            ], 404);
        }

        return Response::json([
            'data' => $this->transform($history)
        ], 200);
    }

    private function transformCollection($histories) {
        return array_map([$this, 'transform'], $histories->toArray());
    }

    private function transform($history) {
        return [
            'history_id' => $history['id'],
            'history_amount' => $history['nominal']
        ];
    }
}
