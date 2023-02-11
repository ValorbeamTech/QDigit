<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
class SalesController extends Controller
{
    public function index(Request $request)
    {
        $result = array();
        $data = Sale::where('quantity', 5)->take(3)->get();
        if($data){
            $result['success'] = true;
            $result['message'] = $data;
        }
        return response()->json($result, 200);
    }

  
}
