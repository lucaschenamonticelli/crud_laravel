<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendedorController extends Controller
{
    public function index(){
    	$vendedor = DB::table('vendedors')->get();
        return view('vendedor/index', ['vendedor' => $vendedor]);
    }

    public function cadastro($id = null){
    	$vendedor = array();
    	if($id != null){
    		$vendedor = DB::table('vendedors')->where('id', $id)->get();
    	}
    	return view('vendedor/cadastro', ['vendedor' => $vendedor]);
    }

    public function deletar($id = null){
    	if($id != null){
    		DB::table('vendedors')->where('id', $id)->delete();
    	}
    	$vendedor = DB::table('vendedors')->get();
        return view('vendedor/index', ['vendedor' => $vendedor]);
    }
}
