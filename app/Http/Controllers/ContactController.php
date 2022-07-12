<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $textar= ['t1','t2','tn'];
        return view('contract',[
            'textar' => $textar
        ]);
    }

    public function show($id=null) {
        $textar= [$id.'x1',$id.'x2',$id.'xn'];
        // return 'id = '.$id.$textar[0].$textar[1].$textar[2];
        return view('contract',[
            'textar' => $textar
        ]);

    }
}
