<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('users.import');
    }

    public function store(Request $request)
    {
       

    }


}
