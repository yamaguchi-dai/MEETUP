<?php
namespace App\Http\Controllers\Graph;

use App\Common\AppController;
class GraphController extends AppController {
    
    
    function graph(){
        
        return view('Graph/graph');
    }
}