@extends('layouts.helloapp')

@section('title','Delete')

@section('menubar')
@parent
Delete page
@endsection

@section('content')
<table width="80%" cellspacing="1" cellpadding="0">
  <form action="/hello/del" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th width="20%">title</th>
      <td>{{$form->title}}</td>
    </tr>
    <tr>
      <th>announcement</th>
      <td>{{$form->announcement}}</td>
    </tr>
    <tr>
      <th>is_published</th>
      <td>{{$form->is_published}}</td>
    </tr>
    <tr>
      <th>created_by</th>
      <td>{{$form->created_by}}</td>
    </tr>
    <tr>
      <th>created_at</th>
      <td>{{$form->created_at}}</td>
    </tr>
    <tr>
      <th>updated_by</th>
      <td>{{$form->updated_by}}</td>
    </tr>
    <tr>
      <th>updated_at</th>
      <td>{{$form->updated_at}}</td>
    </tr>
    <tr>
      <th>Push to Delete !</th>
      <td><input type="submit" value="send"></td>
    </tr>
  </form>
</table>
@endsection

@section('footer')
copywrite seika@2019
@endsection
