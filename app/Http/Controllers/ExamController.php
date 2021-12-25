<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    
    public function register(){

          echo "This is register page";
    }


    public function login(){

        $login = 'yeas you are logged';
        dd($login);
    }
}
