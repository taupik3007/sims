<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data_user;

class UserController extends Controller
{
    function index(){
        return view('admin.input_siswa');
    }

    function store(Request $request){
        $nama = $request->input('nama');;
        $nis= $request->input('nis');
        $kelas= $request->input('kelas');
        $agama= $request->input('agama');
        $jk= $request->input('jk');
        $email= $request->input('email');
        $ttl= $request->input('ttl');
        $foto= $request->input('foto');
        $alamat= $request->input('alamat');


       $user = User::create([
        'name' => $nama,
        'nis' =>$nis,
        'email' => $email,
        'password' => bcrypt('12345678'),
    ]);
    $user->assignRole('user');
    // echo $user->id;

        //  $find_user = Data_user::all();
        //  dd($find_user);
    $data_siswa = new Data_user();
    $data_siswa->user_id = $user->id;
    $data_siswa->date = $ttl;
    $data_siswa->religion = $agama;
    $data_siswa->major = $kelas;
    $data_siswa->address = $alamat;
    $data_siswa->image = $foto;
    
    $data_siswa->save();


       


    }
}
