<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $data = table::all();
        return view('table.index')->with("table", $data);
    }
}
