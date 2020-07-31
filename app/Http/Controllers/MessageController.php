<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        //return request(); Con esta forma no es necesario crear una variable ni el use

        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'email.email' => 'El correo electrónico no es válido',
            'content.min' => 'El mensaje debe ser de al menos 3 caracteres'
        ]);

        // Enviar emails

        Mail::to('laloxz001@gmail.com')->queue(new MessageReceived($message));
        
        //return $request;
        //return new MessageReceived($message);

        return 'Mensaje enviado';
    }
}
