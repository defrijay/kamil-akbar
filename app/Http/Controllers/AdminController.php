<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Paket;
use App\Models\Pelanggan;
use App\Models\Motor;
use App\Models\Pemesanan;

class AdminController extends Controller
{

    public function index()
    {
        $pesan = Pesan::all();
        $pelanggan = Pelanggan::all();
        $motor = Motor::all();
        $paket = Paket::all();
        $pemesanan = Pemesanan::all();
        //$pemotor = Motor::with('pelanggan')->get();
        return view('/admin/admin', ["title" => "Admin"],  compact(['pesan'], ['pemesanan'], ['paket'], ['pelanggan'], ['motor']));
    }
    
    public function data()
    {

        return view('/admin/data');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' =>'required'
        ],[
            'email.required' =>'Email Wajib Diisi',
            'password.required' =>'Password Wajib Diisi'
        ]);
        
        $infologin = [
            'email' =>$request->email,
            'password' =>$request->password
        ];
        
        if(Auth::attempt($infologin))
        {
            return redirect('/admin');
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function store(Request $request)
    {
        $data = $request->only(['nama_pelanggan', 'no_telp', 'alamat_pelanggan', 'tipe_motor', 'merk_motor', 'nama_paket', 'stnk', 'keluhan', 'jadwal', 'jam']);
        $datamotor = $request->only(['nama_pelanggan', 'tipe_motor', 'merk_motor']);
        $datapelanggan = $request->only(['nama_pelanggan', 'no_telp', 'alamat_pelanggan']);
        // Simpan data ke tabel 'table1'
        $pelanggan = Pelanggan::create($datapelanggan);
        $motor = Motor::create($datamotor);
        $pemesanan = Pemesanan::create($data);

        //Pelanggan::create($request->except(['_token', 'submit', 'tipe_motor', 'merk_motor', 'nama_paket', 'stnk', 'keluhan', 'jadwal', 'jam']));
        return redirect('/welcome');
    }
}