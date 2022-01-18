<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function Transaksi(){
        $tr=Transaksi::all();
        return view ('Transaksi',compact('tr') );
    }

    public function tambahtransaksi(){
        return view('tambahtransaksi');
    }
    
    public function inserttransaksi(Request $request){
        //dd($request-> all());
        Transaksi::create($request-> all());
        return redirect()->route('transaksi')->with('success','Data Yang Anda Masukkan Berhasil');
    }
    public function tampilkantransaksi($id){
        $data = Transaksi::find($id);
        //dd($data);
        return view('tampilkantransaksi',compact('transaksi'));
    }
    public function updatetransaksi(Request $request,$id){
        $data = Transaksi::find($id);
        $data->update($request->all());
        return redirect()->route('transaksi')->with('success','Data Berhasil di Perbarui');
    }
}
