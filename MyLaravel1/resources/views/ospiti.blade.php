@extends('layouts.main-layout')
@section('content')
  <div class="main-container">
    <h2>OSPITI</h2>
    <ul>
      @foreach ($ospiti as $ospite)
        <li>
          &#8226;
          <a href="{{route('ospiti-show', $ospite -> id)}}">
            {{$ospite -> name}}
            {{$ospite -> lastname}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="links">
    <a href="{{route('ospiti-create')}}">NEW OSPITE</a>
    <a href="{{route('paganti-index')}}">PAGANTI</a>
  </div>
@endsection
