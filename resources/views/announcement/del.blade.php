@extends('layouts.helloapp')

@section('title','Announcement.Delete')

@section('menubar')
  @parent
  delete page
@endsection

@section('content')
  <table width="80%" cellspacing="1" cellpadding="10">
    <form action="/announcement/del" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr>
        <th width="20%">title: </th>
        <td width="400px">
          {{$form->title}}
        </td>
      </tr>
      <tr>
        <th>announcement: </th>
        <td>
          {{$form->announcement}}
        </td>
      </tr>
      <tr>
        <th>is_published: </th>
        <td>
          {{$form->is_published}}
        </td>
      </tr>
      <tr>
        <th>updated_by: </th>
        <td>
          {{$form->updated_by}}
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <input type="submit" value="delete">
        </td>
      </tr>
    </form>
  </table>
@endsection

@section('footer')
  copywrite seika@2019
@endsection
