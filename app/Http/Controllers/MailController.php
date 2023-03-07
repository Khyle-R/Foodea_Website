<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailVerification;

class MailController extends Controller
{
    public function MailIndex(){

       $code = mt_rand(100000, 999999);
       
       $mailData = [
        'title' => 'Account Verification',
        'body' => 'test',
        'code' => $code,
       ];
       Mail::to('goodmanwha@gmail.com')->send(new MailVerification($mailData));
    }
}