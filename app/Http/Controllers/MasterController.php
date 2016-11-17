<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterReksadana as Master;
use Response;

class MasterController extends Controller
{
    public function index() {
        $masters = Master::all();
        return Response::json([
            'data' => $this->transformCollection($masters)
        ], 200);
    }

    public function show($id) {
        $master = Master::find($id);

        if(!$master) {
            return Response::json([
                'error' => [
                    'message' => 'Master does not exist'
                ]
            ], 404);
        }

        return Response::json([
            'data' => $this->transform($master)
        ], 200);
    }

    private function transformCollection($masters) {
        return array_map([$this, 'transform'], $masters->toArray());
    }

    private function transform($master) {
        return [
            'master_id' => $master['id'],
            'master_name' => $master['name'],
            'master_type' => $master['type']
        ];
    }
}
