
@extends('layouts.main-layout')
@section('content')
  <div class="main-container">
    <h2>
      OSPITE:
      {{$ospite -> name}}
      {{$ospite -> lastname}}
    </h2>
    <ul>
        <li>
          &#8226; Date of Birth: <br>
          {{$ospite -> date_of_birth}}
        </li>
        <li>
          &#8226; Document Type: <br>
          {{$ospite -> document_type}}
        </li>
        <li>
          &#8226; Document Number: <br>
          {{$ospite -> document_number}}
        </li>
    </ul>
  </div>
@endsection
