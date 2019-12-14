@extends('layouts.helloapp')


@section('title','Index')

@section('menubar')
  @parent
  indexpage
@endsection

@section('content')
  <p>This is a main part of this application.</p>
  <p>This is a link to <middleware>google.com</middleware>.</p>
  <p>This is a link to <middleware>yahoo.co.jp</middleware>.</p>
@endsection

@section('footer')
  copywrite seika@2019
@endsection
