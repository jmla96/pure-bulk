<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class noexitosaController extends Controller
{
    public function basic_email(){

        $data = []; // Empty array

        Mail::send('noexitosaMail', $data, function($message)
        {
            $message->to('contacto@miproteina.com.co')->subject('Compra no exitosa');
        });
        return view('app.no-exitosa ');
    }//
}
?>