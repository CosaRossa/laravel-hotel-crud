<?php

namespace App\Http\Controllers;

use App\Ospite;
use Illuminate\Http\Request;

class OspiteController extends Controller
{
  public function index() {
    $ospiti = Ospite::all();
    return view('ospiti', compact('ospiti'));
  }

  public function show($id) {
    $ospite = Ospite::findOrfail($id);
    return view('ospite', compact('ospite'));
  }

  public function create() {
    return view('ospite-create');
  }

  public function store(Request $request) {
    $data = $request -> all();
    $ospite = Ospite::create($data);

    return redirect() -> route('ospiti-index');
  }
}
