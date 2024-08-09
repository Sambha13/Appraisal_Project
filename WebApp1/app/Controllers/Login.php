<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
       return view('login');



       //don't edit this code
    //    $plainTextPassword = '';
    //     $hashedPassword = password_hash($plainTextPassword, PASSWORD_BCRYPT);
    //     echo $hashedPassword;
    }

    
}
