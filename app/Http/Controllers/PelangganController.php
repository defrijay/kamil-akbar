<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('/admin/editpelanggan', ["title" => "Admin"], compact(['pelanggan']));
    }
    
    public function update($id, Request $request)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->except(['_token', 'submit',]));
        return redirect('/admin')->with(['message'=> 'Successfully edited!!']);
    }
    
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/admin')->with(['message'=> 'Successfully deleted!!']);
    }
}