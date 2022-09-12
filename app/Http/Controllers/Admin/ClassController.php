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
    $major = Major::all();
    // dd($major);
    return view('admin.create-class',compact(['major']));
   } 
   function store(Request $request){
    echo $class = $request->input('kelas');
    echo $major = $request->input('jurusan');
    echo $number = $request->input('nomor');
   }
}
