<?php

namespace App\Http\Controllers;

use App\Mail\signupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public static function sendSingnupEmail($name , $email , $verification_code)
    {
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new signupEmail($data));
    }
}
