<?php

namespace App\Http\Controllers\Acount;

use App\Common\AppController;

class AcountController extends AppController {

    function create() {
        return view('Acount/create');
    }

    function create_complete() {
        return view('Acount/create_complete');
    }

}
