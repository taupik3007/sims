<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data_user;
use App\Models\Clas;
use App\Models\Major;

class ClassController extends Controller
{
   function index(){
      $class = Clas::join('majors','majors.id_major','=','class.major_id')->get();
      // dd($class);
      return view('admin.list_class',compact(['class']));
      // return view('admin.coba');
   }


   function create(){
    $major = Major::all();
    // dd($major);
    return view('admin.create-class',compact(['major']));
   } 
   function store(Request $request){
    echo $class = $request->input('kelas');
    echo $major = $request->input('jurusan');
    echo $number = $request->input('nomor');

   $cek_class= Clas::join('majors','majors.id_major','=','class.major_id')->get();
   dd($cek_class); 

   }
}
