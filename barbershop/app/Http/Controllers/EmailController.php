<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'subject' => $request->name,
            'email' => $request->email,
            'body' => $request->subject,
        ];

        Mail::to('mcabael.15@gmail.com')->send(new SendEmail($data));

        return redirect()->back()->with('msgSuccess', 'Email sent successfully!');
    }
}
