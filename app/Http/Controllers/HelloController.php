<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        return view('hello.index', ['msg'=>'fill out the form:']);
    }

    public function post(Request $request){
      $validate_rule = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'numeric|between:0,150',
      ];
      $this->validate($request,$validate_rule);
      return view('hello.index', ['msg'=>'The form was inputed successfully.']);
    }
}
