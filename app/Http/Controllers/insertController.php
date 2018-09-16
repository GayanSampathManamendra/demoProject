<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\regTable;

class insertController extends Controller
{
    public function insert(Request $req){

        $member=new regTable();
        $member->name=$req->name;
        $member->email=$req->email;
        $member->password=bcrypt($req->password);

        $member->save();

     return view("sucsessfully registed !");




    }
}
