<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class ApiController extends Controller
{
    public function getData(Request $request){
        if(isset($request->angulo)){
            $data = Datos::where("angulo", "=", $request->angulo)->get();
            $mydata = [];
            if(count($data) > 0){
                $value = rand(0, count($data) - 1);
                $mydata = $data[$value];
            }
            return response()->json($mydata);
        }else{
            return response("error");
        }                    
    }
}
