@extends('layouts.main-layout')
@section('content')
  <div class="main-container">
    <h2>STANZE</h2>
    <ul>
      @foreach ($stanze as $stanza)
        <li>
          &#8226;
          <a href="{{route('stanze-show', $stanza -> id)}}">
            Room Number:
            {{$stanza -> room_number}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="links">
    <a href="{{route('stanze-create')}}">NEW STANZA</a>
  </div>
@endsection
