<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function edit($id)
    {
        $motor = Motor::find($id);
        //dd($motor);
        return view('/admin/editmotor', ["title" => "Admin"], compact(['motor']));
        //return view('editmotor');
    }
    
    public function update($id, Request $request)
    {
        $motor = Motor::find($id);
        $motor->update($request->except(['_token', 'submit']));
        return redirect('/admin')->with(['message'=> 'Successfully edited!!']);
    }
    
    public function destroy($id)
    {
        $motor = Motor::find($id);
        $motor->delete();
        return redirect('/admin')->with(['message'=> 'Successfully deleted!!']);
    }
}