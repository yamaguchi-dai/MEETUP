<?php
namespace App\Http\Controllers\MeetManagement;

use App\Common\AppController;
class MeetManagementController extends AppController {
    
    
    function meet_management(){
        
        return view('MeetManagement/meet_management');
    }
}