<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{    
    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id);
        return view('/admin/editpemesanan', ["title" => "Admin"], compact(['pemesanan']));
    }
    
    public function update($id, Request $request)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->update($request->except(['_token', 'submit']));
        return redirect('/admin')->with(['message'=> 'Successfully edited!!']);
    }
    
    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/admin')->with(['message'=> 'Successfully deleted!!']);
    }
}