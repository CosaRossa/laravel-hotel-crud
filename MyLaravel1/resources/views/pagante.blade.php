
@extends('layouts.main-layout')
@section('content')
  <div class="main-container">
    <h2>
      PAGANTE:
      {{$pagante -> name}}
      {{$pagante -> lastname}}
    </h2>
    <ul>
        <li>
          &#8226; Address: <br>
          {{$pagante -> address}}
        </li>
    </ul>
  </div>
@endsection
