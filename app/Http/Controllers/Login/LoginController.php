<?php
namespace App\Http\Controllers\Login;

use App\Common\AppController;
class LoginController extends AppController {
    
    
    function login(){
        return view('Login/login');
    }
}