<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('tugasform');
    }

    public function hasil(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "ttl" => 'required',
            "jenis_kelamin" => 'required',
            "hobi" => 'required',
        ]);
        return view('tugashasil', ['data' => $request]);
    }
}