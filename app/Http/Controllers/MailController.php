<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\myemail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendEmail(){
        $sub = "EMail test from laravel";
        $to = "aman.gour@ktekresourcing.com";
        $message = "Lorem Ipsum is a placeholder text commonly used in graphic design, publishing, and web development to simulate the appearance of actual content. It's a meaningless Latin-like text that helps designers and publishers test layouts and typefaces without having to rely on real content";

        $request = Mail::to($to)
                    ->cc(['dharmendra.patel@ktekresourcing.com', 'anand.pandey@ktekresourcing.com'])
                    ->send(new myemail($message, $sub));
        dd($request);
    }
}
