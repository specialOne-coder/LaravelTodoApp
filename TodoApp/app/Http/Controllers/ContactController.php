<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function getContactpage(){
        return view('contact');
    }

    public function postcontact(ContactRequest $request){
         /* Mail::send('email_contact', $request->all(), function($message) 
        {
            $message->to('ferdiattivi@gmail.com')->subject('Contact');
        });*/
        return view('confirm');
    }
}
