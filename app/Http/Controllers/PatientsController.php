<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    use AuthorizesRequests;
    public function index(){
        return view('/patients/index');
    }
}
