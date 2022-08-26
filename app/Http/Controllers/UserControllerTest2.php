<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerTest2 extends Controller
{
    //
    public function b(Request $request){
        $name = $request->query('name');
        dd($name);
        return true;
    }
}
