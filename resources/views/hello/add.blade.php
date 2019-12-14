@extends('layouts.helloapp')

@section('title','Add')

@section('menubar')
@parent
create new
@endsection

@section('content')
<table width="80%" cellspacing="1" cellpadding="0">
  <form action="/hello/add" method="post">
    {{ csrf_field() }}
    <tr>
      <th width="20%">title</th>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <th>announcement</th>
      <td><input type="text" name="announcement"></td>
    </tr>
    <tr>
      <th>is_published</th>
      <td><input type="number" name="is_published"></td>
    </tr>
    <tr>
      <th>created_by</th>
      <td><input type="number" name="created_by"></td>
    </tr>
    <tr>
      <th>Push to Submit !</th>
      <td><input type="submit" value="send"></td>
    </tr>
  </form>
</table>
@endsection

@section('footer')
copywrite seika@2019
@endsection
