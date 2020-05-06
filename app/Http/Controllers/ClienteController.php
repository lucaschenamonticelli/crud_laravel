<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(){
    	$cliente = DB::table('clientes')->get();
        return view('cliente/index', ['cliente' => $cliente]);
    }

    public function cadastro($id = null){
    	$cliente = array();
    	if($id != null){
    		$cliente = DB::table('clientes')->where('id', $id)->get();
    	}
    	return view('cliente/cadastro', ['cliente' => $cliente]);
    }

    public function deletar($id = null){
    	if($id != null){
    		DB::table('clientes')->where('id', $id)->delete();
    	}
    	$cliente = DB::table('clientes')->get();
        return view('cliente/index', ['cliente' => $cliente]);
    }
}
