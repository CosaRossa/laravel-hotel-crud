@extends('layouts.main-layout')
@section('content')
  <div class="main-container">
    <h2>PAGANTI</h2>
    <ul>
      @foreach ($paganti as $pagante)
        <li>
          &#8226;
          <a href="{{route('paganti-show', $pagante -> id)}}">
            {{$pagante -> name}}
            {{$pagante -> lastname}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="links">
    <a href="{{route('ospiti-index')}}"></a>
    <a href="{{route('paganti-index')}}"></a>
  </div>
@endsection
