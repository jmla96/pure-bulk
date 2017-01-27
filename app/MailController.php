<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//we will use Mail namespace
use Mail;
class MailController extends Controller
{
    //first, create function for send basic  email
    public function basic_email(Request $request){

        $input = $request->all();

        //$data = ['name' =>  $request->get('name') ];
        // Send the email with the contactemail view, the user input
        Mail::send('mail', $input, function($message)
        {
            $message->to('contacto@miproteina.com.co')->subject('Pure Bulk - Mensaje de usuario!');
        });
        return view('app.mensaje-enviado');
    }
}
