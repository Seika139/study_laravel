@extends('layouts.helloapp')


@section('title','Index')

@section('menubar')
  @parent
  indexpage
@endsection

@section('content')
  <table>
    <tr><th>Id</th><th>WriterId</th><th>Title</th></tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->writer_id}}</td>
        <td>{{$item->title}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copywrite seika@2019
@endsection
