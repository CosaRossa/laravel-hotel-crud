@extends('layouts.main-layout')
@section('content')
  <div class="main-container">
    <h2>
      STANZA:
      {{$stanza -> room_number}}
    </h2>
    <ul>
      <li>
        &#8226; Floor: <br>
        {{$stanza -> floor}}
      </li>
      <li>
        &#8226; Beds: <br>
        {{$stanza -> beds}}
      </li>
    </ul>
    <div class="links">
      <a href="{{route('stanze-index')}}">INDEX STANZE</a>
    </div>
  </div>
@endsection
