<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class exitosaController extends Controller
{
    public function basic_email(){

        $data = []; // Empty array

        Mail::send('exitosaMail', $data, function($message)
        {
            $message->to('contacto@miproteina.com.co')->subject('Compra exitosa');
        });
        return view('app.gracias ');
    }//
}
?>