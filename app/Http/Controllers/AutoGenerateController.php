<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutoGenerateController extends Controller
{
    public function showorder($id) 
    {
        $unit = \DB::table('SSD')->where('Serial Number','=',$id)->where('Total Cost','>=','0')->get();
        return $unit;
    }
    public function actprice($id) 
    {
        $unit = \DB::table('Item Master IIM')->where('Part Number','=',$id)->get();
        return $unit;
    }
}
