<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function send(){
        Mail::send(['text'=>'mail'],['name','Имя'],function ($message){
            $message->to('Почта получателя', 'Имя получателя')->subject('Тема письма');
            $message->from('Почта отправителя', 'Имя отправителя');
        });
    }
}
