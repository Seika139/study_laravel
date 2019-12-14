@extends('layouts.helloapp')

@section('title','Show')

@section('menubar')
  @parent
  detail page
@endsection

@section('content')
  @if ($items != null)
    <table>
      <tr>
      <th>id: </th>
      <th>title: </th>
      <th>announcement: </th>
      <th>is_published: </th>
      <th>created_by: </th>
      <th>created_at: </th>
      <th>updated_by: </th>
      <th>updated_at: </th>
    </tr>
      @foreach($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->announcement}}</td>
        <td>{{$item->is_published}}</td>
        <td>{{$item->created_by}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_by}}</td>
        <td>{{$item->updated_at}}</td>
      </tr>
      @endforeach
    </table>

  @endif
@endsection

@section('footer')
  copywrite seika@2019
@endsection
