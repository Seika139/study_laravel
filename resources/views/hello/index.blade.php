@extends('layouts/helloapp')

@section('title','Index')

@section('menubar')
  @parent
  indexpage
@endsection

@section('content')
  <p>This is a main part of this application.</p>
  <p>You can write what you want.</p>

  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    This is a message
    @endslot
  @endcomponent
@endsection

@section('footer')
  copywrite seika@2019
@endsection
