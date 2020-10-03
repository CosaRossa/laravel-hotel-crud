@extends('layouts.main-layout')
@section('content')
  <h1>NEW STANZA</h1>
  <form action="{{route('stanze-store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="room_number">Room Number:</label> <br>
      <input type="number" name="room_number" value="" min="100">
    </div>
    <div class="form-group">
      <label for="floor">Floor:</label> <br>
      <input type="number" name="floor" value="">
    </div>
    <div class="form-group">
      <label for="beds">Beds:</label> <br>
      <input type="number" name="beds" value="">
    </div>
    <div class="submit-button">
      <button type="submit" name="button">New Stanza</button>
    </div>
  </form>
@endsection
