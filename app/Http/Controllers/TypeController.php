<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function type_product($id)
    {

        $Products=DB::table('products')->where('status','=','1')->where('priority','=',$id)
            ->orderBy('rating', 'DESC')->get();

        return view('type')->with(array('Products'=>$Products));
    }
}
