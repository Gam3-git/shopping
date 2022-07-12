<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutindex() {
        $drinks=['coke','greentea','pepsi'];
        $email="555@smkc.com";
        $tel="08956565";
        return view('about',[
            'drinks' => $drinks ,
            'email' => $email ,
            'tel' => $tel
        ]);
    }
}
