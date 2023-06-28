<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddData;

class databasecontroller extends Controller
{
    public function adddata(Request $request)
    {
        //dd($request); to verify request arrived
        $dataadd = new AddData;

        $dataadd->nic = $request->nic;
        $dataadd->name = $request->name;
        $dataadd->email = $request->email;

        //dd($dataadd); check assigned
        $dataadd->save();

        $data = Adddata::all();

        return redirect()->back()->with('databasedata', $data);
    }

    public function deletedata($id)
    {
        $data = AddData::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedata()
    {
        
    }

}
