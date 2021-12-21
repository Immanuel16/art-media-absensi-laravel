<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\GoogleCalendar\Event;

class FormAcaraController extends Controller
{
    public $fullname = '';
    public $picName = '';
    public $eventName = '';
    public $exeTime = '';
    public function index(){
        return view('form-acara.form-acara');
    }
    
    public function sendEmail(){
        $event = new Event;
        $event->name='Testing Dulu';
        $event->startDateTime = Carbon::now();
        $event->endDateTime = Carbon::now()->addHour();
        
        $this->fullname = Request()->fullname;
        $this->picName = Request()->picName;
        $this->eventName = Request()->eventName;
        $this->exeTime = Request()->exeTime;
        
        $event->save(); 
        
        $email = 'immanuelmiduk@gmail.com';
        $data = [
            'fullname' => $this->fullname,
            'picName' => $this->picName,
            'eventName' => $this->eventName,
            'exeTime' => $this->exeTime
        ];
        Mail::to($email)->send(new SendMail($data));
        
        return redirect()->route('form-acara')->with('pesan', 'Email berhasil dikirim');
    }
}
