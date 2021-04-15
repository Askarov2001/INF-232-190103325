<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Hello read this message, and be happy!',
            'body' => 'This is for testing mail using platform gmail.'
        ];

        Mail::to("adlet.ask.09@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
