<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data_user;
use App\Models\Clas;
use App\Models\Major;
use Barryvdh\DomPDF\Facade\Pdf;

class QrController extends Controller
{
     function index($class)
    {
       $user = User::join('data_users','data_users.user_id','=','users.id_user')->join('class','class.id_class','=','data_users.class_id')->select('nis','name')->role('user')->where('id_class',$class)->get();

       return view('admin.print-qr',compact(['user']));

        // $pdf = Pdf::loadView('print-qr',compact(['user']));
        // return $pdf->download('qr.pdf');
    }
}
