<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
 public function store()
 {
 	$message= request()->validate([
 		'name'=>'required',
 		'email'=>'required|email',
 		'subject'=>'required',
 		'content'=>'required|min:3'

 ],['name.required' => 'Ncecesito tu nombre']);
Mail::to('rubenoctavio@itsn.edu.mx')->queue(new MessageReceived($message));
 	return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas');
 }
}

