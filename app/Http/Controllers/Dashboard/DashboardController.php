<?php
namespace App\Http\Controllers\Dashboard;

use App\Common\AppController;
class DashboardController extends AppController {
    
    
    function dashboard(){
        
        return view('Dashboard/dashboard');
    }
}