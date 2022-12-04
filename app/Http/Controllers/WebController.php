<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function dashboard(Request $request){
        $name1 = "Luka";
        $users = ["Luka Rad", "MArko MAr", "Luka Luk", "Petar Pet", "Gojko Gojk"];
        $list = 'false';
        if ($request->has('list') && $request->list == 'true'){
            $list = 'true';
        }
        return view('test', [
            "name1" => $name1,
            "users" => $users,
            "list" => $list
        ]);
    }
}
