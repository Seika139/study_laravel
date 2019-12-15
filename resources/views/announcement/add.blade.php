@extends('layouts.helloapp')

@section('title','Announcement.add')

@section('menubar')
  @parent
  create new
@endsection

@section('content')
  @if (count($errors) > 0)
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <table width="80%" cellspacing="1" cellpadding="10">
    <form action="/announcement/add" method="post">
      {{ csrf_field() }}
      <tr>
        <th width="20%">title: </th>
        <td width="400px">
          <input type="text" name="title" value="{{old('title')}}">
        </td>
      </tr>
      <tr>
        <th>announcement: </th>
        <td>
          <input type="text" name="announcement" value="{{old('announcement')}}">
        </td>
      </tr>
      <tr>
        <th>is_published: </th>
        <td>
          <input type="number" name="is_published" value="{{old('is_published')}}">
        </td>
      </tr>
      <tr>
        <th>created_by: </th>
        <td>
          <input type="number" name="created_by" value="{{old('created_by')}}">
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <input type="submit" value="send">
        </td>
      </tr>
    </form>
@endsection

@section('footer')
  copywrite seika@2019
@endsection
