<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Basic Controller
     */
    public function basic(){
        $apiData = [
            'status'        =>  'ok',
            'msg'           =>  'Api run successful'
        ];

        // return json data format
        return response()->json($apiData);
    }
}
