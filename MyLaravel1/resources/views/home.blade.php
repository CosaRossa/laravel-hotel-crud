@extends('layouts.main-layout')
@section('content')
  <div class="links">
    <a href="{{route('ospiti-index')}}">OSPITI</a>
    <a href="{{route('paganti-index')}}">PAGANTI</a>
    <a href="{{route('stanze-index')}}">STANZE</a>
  </div>
@endsection
