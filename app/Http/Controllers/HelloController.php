<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head,$style,$body,$end;

$head = '<html><head>';
$style = <<<EOF
<style>
  body {font-size:100pt; text-align:center; color:#eee;
  margin:-40px 0px -50px 0px; }
</style>
EOF;

$body = '</head><body>';
$end = '</body></head>';

function tag($tag,$txt){
  return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(Request $request){
      return view('hello.index',['data'=>$request->data]);
    }
}
