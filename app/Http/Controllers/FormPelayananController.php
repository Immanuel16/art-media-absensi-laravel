<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailFormPelayanan;
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
            'fullname' => 'required|min:3|regex:/^[\pL\s]+$/u',
            // 'email' =>'required|regex:/^.+@.+$/i'
        ],
        [
            'fullname.required' => 'nama lengkap wajib diisi',
            'fullname.min' => 'nama lengkap minimal 3 huruf',
            'fullname.regex' => 'nama lengkap hanya berupa huruf saja',
            // 'email.required' => 'email wajib diisi',
            // 'email.regex' => 'email tidak sesuai dengan format'
        ]
        );
        
        $fullname = strtolower(Request()->fullname);
        $email = DB::table('data_email')->select('email')->where('fullname', 'like', Request()->fullname);

        // dd($email);
        
        $tgl = implode('; ', Request()->tanggal);
        $tglExplode = explode("; ", $tgl);
        
        $allUsername = DB::table('data_pelayanan')->select('fullname')->where('fullname', 'like', $fullname)->where('tanggal', 'like', '%Februari%')->first();

        $data = [
            'fullname' => strtolower(Request()->fullname),
            'email' => $email,
            'tanggal'=> $tgl,
            // 'hasVaccinated' => Request()->hasVaccinated,
            // 'notes' => Request()->notes,
            'created_at' => date('d-m-Y H:i:s')
        ];
        
        $dataEmail = [
            'fullname' => Request()->fullname,
            'email' => $email,
            'tanggal'=> $tglExplode,
            // 'notes' => Request()->notes,
            // 'created_at' => date('d M Y')
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
                $this->sendEmailPelayanan(Request()->email, $dataEmail);
                return redirect('form-pelayanan');
            }
        } else{
            Alert::success('Terima Kasih', 'Data Anda sudah kami terima');
                // dd("bisa");
                $this->FormPelayananModel->saveData($data);
                $this->sendEmailPelayanan(Request()->email, $dataEmail);
                return redirect('form-pelayanan');
                
                
        }
        
    }
    
    // public function sendEmail($emailReceiver, $dataArray){
    //     $email = $emailReceiver;
    //     $data = $dataArray;
    //     Mail::to($emailReceiver)->send(new SendMail($dataArray));
    // }
    
    public function sendEmailPelayanan($emailReceiver, $dataArray){
        $email = $emailReceiver;
        $data = $dataArray;
        Mail::to($emailReceiver)->send(new SendMailFormPelayanan($dataArray));
    }
}
