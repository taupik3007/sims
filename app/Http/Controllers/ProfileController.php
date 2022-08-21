<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($nis){
        $user = User::join('data_users','users.id','=','data_users.user_id')->
        whereNis($nis)->first();
        // dd($data);
        if($user != FALSE){
            return view('profile',compact(['user']));
        }else{
            return abort(403,'user tidak ditemukan');
        }

       
    }
}
