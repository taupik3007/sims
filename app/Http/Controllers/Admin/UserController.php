<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data_user;
use App\Models\Clas;
use App\Models\Major;

class UserController extends Controller
{
    function index(){

        $class = clas::join('majors','class.major_id','=','majors.id_major')->get();
        // dd($class);
        return view('admin.input_siswa',compact(['class']));
    }

    function store(Request $request){
        $nama = $request->input('nama');;
        $nis= $request->input('nis');
        $kelas= $request->input('kelas');
        $agama= $request->input('agama');
        $jk= $request->input('jk');
        $email= $request->input('email');
        $ttl= $request->input('ttl');
        $foto= $request->file('foto');
        $alamat= $request->input('alamat');

        $validateData = $request->validate([
            'email'=> 'unique:users,email',
            'foto' => 'required',
            'nis'=>'unique:users,nis',



            ],
            [
                'email.unique' => 'email sudah terdaftar',
                'nis.unique' => 'nis sudah terdaftar',
                'foto.required' => 'foto belum di isi'
            ]
    
        );




       $user = User::create([
        'name' => $nama,
        'nis' =>$nis,
        'email' => $email,
        'password' => bcrypt('12345678'),
    ]);
    $user->assignRole('user');
    // dd($user->id);
        //  $find_user = Data_user::all();

        //  dd($find_user);
        $path = $foto->store('uploads');
    $data_siswa = new Data_user();
    $data_siswa->user_id = $user->id;
    $data_siswa->date = $ttl;
    $data_siswa->religion = $agama;
    $data_siswa->class_id = $kelas;
    $data_siswa->address = $alamat;
    $data_siswa->image = $path;
    
    $data_siswa->save();


       


    }
}
