<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{

    public function getPropospage(){
        return view('apropos');
    }
}
