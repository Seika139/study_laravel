@extends('layouts.helloapp')

@section('title','Announcement.index')

@section('menubar')
  @parent
  indexpage
@endsection

@section('content')
  <table>
    <tr><th>Data</th></tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copywrite seika@2019
@endsection
