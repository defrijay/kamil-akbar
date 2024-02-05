<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        return view('contact', [
            "title" => "Kontak"
        ]);
    }
    
    public function store(Request $request)
    {
        Pesan::create($request->except(['_token', 'submit']));
        return redirect('/kontak');
    }
    
    public function edit($id)
    {
        $pesan = Pesan::find($id);
        return view('/admin/editpesan', ["title" => "Admin"], compact(['pesan']));
    }
    
    public function update($id, Request $request)
    {
        $pesan = Pesan::find($id);
        $pesan->update($request->except(['_token', 'submit']));
        return redirect('/admin')->with(['message'=> 'Successfully edited!!']);
    }
    
    public function destroy($id)
    {
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect('/admin')->with(['message'=> 'Successfully deleted!!']);
    }
}