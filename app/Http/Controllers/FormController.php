<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
    	$nama_variabel = $request->input('nama');
    	$bebas_aja = $request->input('email');
    	$gender_v = $request->input('gender');
    	$hobby_v = $request->input('hobby');

    	return view('forms')
    	->with('nama', $nama_variabel)
    	->with('email', $bebas_aja)
    	->with('gender', $gender_v)
    	->with('hobby', $hobby_v);

    }
}
