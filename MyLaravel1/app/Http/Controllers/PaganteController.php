<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller
{
  public function index() {

    $paganti = Pagante::all();
    return view('paganti', compact('paganti'));
  }

  public function show($id) {

    $pagante = Pagante::findOrfail($id);
    return view('pagante', compact('pagante'));
  }
}
