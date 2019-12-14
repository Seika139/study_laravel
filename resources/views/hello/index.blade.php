@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
  @parent
@endsection

@section('content')
  <p>本文のコンテンツ</p>
  <table>
    @foreach($data as $item)
    <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
  </table>
@endsection

@section('footer')
copyright 2019@seika
@endsection
