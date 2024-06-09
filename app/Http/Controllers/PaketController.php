<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    
    public function store(Request $request)
    {
        //dd($request->all());
        //dd($request->except(['_token', 'submit',]));
        Paket::create($request->except(['_token', 'submit']));
        return redirect('/admin')->with(['message'=> 'Successfully added!!']);;
    }
    
    public function edit($id)
    {
        $paket = Paket::find($id);
        //dd($paket);
        return view('/admin/editpaket', ["title" => "Admin"], compact(['paket']));
        //return view('editpaket');
    }
    
    public function update($id, Request $request)
    {
        $paket = Paket::find($id);
        $paket->update($request->except(['_token', 'submit']));
        return redirect('/admin')->with(['message'=> 'Successfully edited!!']);
    }
    
    public function destroy($id)
    {
        $paket = Paket::find($id);
        $paket->delete();
        return redirect('/admin')->with(['message'=> 'Successfully deleted!!']);
    }
}