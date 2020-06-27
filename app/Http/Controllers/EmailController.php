<?php

namespace App\Http\Controllers;

use App\Subscribed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class EmailController extends Controller
{


    public function send2(Request $request)
    {
        $email = $request->input('email');
        $mail_content = $request->input('mail_content');
        $data = array('title' => 'Quảng cáo', 'content' => $mail_content);
        Mail::send('admin.email.send_reicept', $data, function ($message) use ($email) {
            $message->to($email, 'Fashion Vietnam Subscribers')->subject
            ('Quảng cáo sản phảm mới Fashion Vietnam');
            $message->from('fashionvietnam@gmail.com', 'Fashion Vietnam');
        });
        return response()->json(['msg', 'DONE'], 200);
    }
}
