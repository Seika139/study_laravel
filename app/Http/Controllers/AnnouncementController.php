<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(Request $request){
      $items = Announcement::all();
      return view('announcement.index',['items' => $items]);
    }

    public function find(Request $request){
      return view('announcement.find',['input'=>'']);
    }

    public function search(Request $request){
      $item = Announcement::find($request->input);
      $param = ['input'=>$request->input, 'item'=>$item];
      return view('announcement.find', $param);
    }
}
