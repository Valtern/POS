<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        return view('userProfile', ['id' => $id, 'name' => $name]);
    }
}
