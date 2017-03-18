<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class pendienteController extends Controller
{
    public function basic_email(){

        $data = []; // Empty array

        Mail::send('pendienteMail', $data, function($message)
        {
            $message->to('contacto@miproteina.com.co')->subject('Compra pendiente');
        });
        return view('app.pendiente ');
    }//
}
