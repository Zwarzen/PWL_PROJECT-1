<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $data = form::all();
        return view('form.index')->with("form", $data);
    }
}
