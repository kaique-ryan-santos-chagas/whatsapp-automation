<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\WebDriver\Remote\RemoteWebDriver;

class MessageController extends Controller
{

    public function homePage(){
        return view('welcome');
    }

    public function loadWhatsappWeb(){
        return redirect()->to('https://web.whatsapp.com');
    }


    public function sendMessage(){
        
    }
}
