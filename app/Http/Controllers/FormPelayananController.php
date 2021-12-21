<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\FormPelayananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;





class FormPelayananController extends Controller
{
    public function __construct()
    {
        $this->FormPelayananModel = new FormPelayananModel();
    }
    public function index(){
        return view('form-pelayanan.form-pelayanan');
    }
    
    public function add(){
        Request()->validate([
            'fullname' => 'required|min:4|regex:/^[\pL\s]+$/u',
            'email' =>'required|regex:/^.+@.+$/i'
        ],
        [
            'fullname.required' => 'nama lengkap wajib diisi',
            'fullname.min' => 'nama lengkap minimal 4 huruf',
            'fullname.regex' => 'nama lengkap hanya berupa huruf saja',
            'email.required' => 'email wajib diisi',
            'email.regex' => 'email tidak sesuai dengan format'
        ]
        );
        
        $fullname = Request()->fullname;
        
        $tgl = implode(', ', Request()->tanggal);
        
        $allUsername = DB::table('data_pelayanan')->select('fullname')->where('fullname', 'like', $fullname)->where('tanggal', 'like', '%juni%')->first();
        
        // dd($allUsername);
        
        $data = [
            'fullname' => Request()->fullname,
            'email' => Request()->email,
            'tanggal'=> $tgl,
            'notes' => Request()->notes
        ];
        
        
        if($allUsername !== null){
            if($fullname == $allUsername->fullname){
                Alert::warning('Maaf', 'Anda sudah mengisi form ini sebelumnya');
                // dd('gagal');
                return back();
                
            } else{
                Alert::success('Terima Kasih', 'Data Anda sudah kami terima');
                dd("bisa doang");
                $this->FormPelayananModel->saveData($data);
                $this->sendEmail(Request()->email, $data);
                return redirect('form-pelayanan');
            }
        } else{
            Alert::success('Terima Kasih', 'Data Anda sudah kami terima');
                // dd("bisa");
                $this->FormPelayananModel->saveData($data);
                $this->sendEmail(Request()->email, $data);
                return redirect('form-pelayanan');
        }
        
    }
    
    public function sendEmail($emailReceiver, $dataArray){
        $email = $emailReceiver;
        $data = $dataArray;
        Mail::to($email)->send(new SendMail($data));
    }
}
