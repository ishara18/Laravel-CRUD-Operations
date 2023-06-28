<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddData;

class viewcontroller extends Controller
{
    public function formview()
    {
        $data = Adddata::all();

        return view ('formview')->with('databasedata', $data);;
    }
}
