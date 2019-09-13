<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller
{
    public function listar ()
    {
    	$data = User::listarValues();
        return view('layouts.template', $data);
    }
}
