@extends('layouts.main-layout')
@section('content')
  <h1>NEW OSPITE</h1>
  <form action="{{ route('ospiti-store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="name">Name:</label>
      <br>
      <input type="text" name="name" value="">
    </div>
    <div class="form-group">
      <label for="lastname">Lastname:</label>
      <br>
      <input type="text" name="lastname" value="">
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of birth:</label>
      <br>
      <input type="date" name="date_of_birth" value="">
    </div>
    <div class="form-group">
      <label for="document_type">Document Type:</label>
      <br>
      <select name="document_type">
        <option value="CI">CI</option>
        <option value="Driver License">Driver License</option>
      </select>
    </div>
    <div class="form-group">
      <label for="document_number">Document Number:</label>
      <br>
      <input type="text" name="document_number" value="">
    </div>
    <div class="submit-button">
      <button type="submit" name="button">New Ospite</button>
    </div>
  </form>
@endsection
