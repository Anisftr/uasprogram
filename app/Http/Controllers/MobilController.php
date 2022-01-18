<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function Mobil(){
        $mb=Mobil::all();
        return view ('mobil',compact('mb') );
    }

    public function tambahmobil(){
        return view('tambahmobil');
    }
    
    public function insertmobil(Request $request){
        //dd($request-> all());
        Mobil::create($request-> all());
        return redirect()->route('mobil')->with('success','Data Yang Anda Masukkan Berhasil');
    }

    public function tampilkanmobil($id){
        $data = Mobil::find($id);
        //dd($data);
        return view('tampilkanmobil',compact('data'));
    }
    public function updatemobil(Request $request,$id){
        $data=Mobil::find($id);
        $data->update($request->all());
        return redirect()->route('mobil')->with('success','Data Berhasil di Perbarui');
    }
    
}
