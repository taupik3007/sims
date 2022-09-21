<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class ProfileController extends Controller
{
    public function index($nis){
        $user = User::join('data_users','users.id_user','=','data_users.user_id')->join('class','data_users.class_id','=','class.id_class')->join('majors','class.major_id','=','majors.id_major')->
        whereNis($nis)->first();
    

    //    $date= $user->date;
        // dd($date);
        if($user != FALSE){
            return view('profile',compact(['user']));
        }else{
            return abort(403,'user tidak ditemukan');
        }

       
    }
    public function download($nis)
    {
        $user = User::join('data_users','users.id_user','=','data_users.user_id')->join('class','data_users.class_id','=','class.id_class')->join('majors','class.major_id','=','majors.id_major')->
        whereNis($nis)->first();
        $pdf = Pdf::loadView('invoice',compact(['user']));
        return $pdf->download('invoice.pdf');
    //    $user = QrCode::size(200)->generate()); 
    //     return response()->download(QrCode::size(200)->format('png')->generate(url('https://siswa.smkmahaputra.sch.id/profile/12312311/student')));
    }
}
