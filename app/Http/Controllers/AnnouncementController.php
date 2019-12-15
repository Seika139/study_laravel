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
    $min = $request->input * 1;
    $max = $request->min + 10;
    $item = Announcement::idOver($min)->idUnder($max)->first();
    $param = ['input'=>$request->input, 'item'=>$item];
    return view('announcement.find',$param);
  }

  public function add(Request $request){
    return view('announcement.add');
  }

  public function create(Request $request){
    $this->validate($request, Announcement::$rules);
    $announcement = new Announcement;
    $form = $request->all();
    unset($form['__token']);
    $announcement->fill($form)->save();
    return redirect('/announcement');
  }

  public function edit(Request $request){
    $announcement = Announcement::find($request->id);
    return view('announcement.edit',['form'=>$announcement]);
  }

  public function update(Request $request){
    $this->validate($request,Announcement::$rules);
    $announcement = Announcement::find($request->id);
    $form = $request->all();
    unset($form['__token']);
    $announcement->fill($form)->save();
    return redirect('/announcement');
  }

  public function delete(Request $request){
    $announcement = Announcement::find($request->id);
    return view('announcement.del',['form'=>$announcement]);
  }

  public function remove(Request $request){
    Announcement::find($request->id)->delete();
    return redirect('/announcement');
  }
}
