<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            "email" => 'required|email',
            "subject" => 'required',
            "content" => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);

        Mail::to('hard85@gmail.com')->queue(new MessageReceived($msg));

        return "Mensaje enviado";
    }
}
