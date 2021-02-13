<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
       return view("contacto");

    }


    public function store(Request $request){


        $correo = new FormularioMailable($request->all());
        Mail::to("fran@hidalgo.com")->send($correo);

        return "Mensaje enviado";
    }
}
