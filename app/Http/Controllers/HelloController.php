<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request){
      if (isset($request->id))
      {
        $param = ['id'=>$request->id];
        $items = DB::table('announcements')->get();
      } else {
        $items = DB::table('announcements')->get();
      }
      return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request){
      if (isset($request->id))
      {
        $param = ['id'=>$request->id];
        $items = DB::select('select * from announcements where id = :id',$param);
      } else {
        $items = DB::select('select * from announcements');
      }
      return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request){
      return view('hello.add');
    }

    public function create(Request $request){
      $param = [
        'title' => $request->title,
        'announcement' => $request->announcement,
        'is_published' => $request->is_published,
        'created_by' => $request->created_by,
        'created_at' => new \Datetime('now'),
        'updated_by' => $request->created_by,
        'updated_at' => new \Datetime('now'),
      ];
      DB::table('announcements')->insert($param);
      return redirect('/hello');
    }

    public function show(Request $request){
      $id_min = $request->id_min;
      $id_max = $request->id_max;
      if ($id_min == null){
        $id_min = 1;
      }
      if ($id_max == null){
        $id_max = 13;
      }
      $items = DB::table('announcements')->whereRaw('id >= ? and id <= ?',[$id_min,$id_max])->get();
      return view('hello.show',['items'=>$items]);
    }

    public function edit(Request $request){
      $item = DB::table('announcements')->where('id',$request->id)->first();
      return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request){
      $param = [
        'id' => $request->id,
        'title' => $request->title,
        'announcement' => $request->announcement,
        'is_published' => $request->is_published,
        'updated_by' => $request->updated_by,
        'updated_at' => new \Datetime('now'),
      ];
      DB::table('announcements')->where('id', $request->id)
      ->update($param);
      return redirect('/hello');
    }

    public function del(Request $request){
      $item = DB::table('announcements')->where('id', $request->id)->first();
      return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request){
      DB::table('announcements')->where('id', $request->id)->delete();
      return redirect('/hello');
    }
}
