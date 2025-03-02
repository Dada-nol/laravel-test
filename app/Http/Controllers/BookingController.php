<?php

namespace App\Http\Controllers;

use App\Models\Property;

class BookingController extends Controller
{
  public function show($id)
  {
    $property = Property::findOrfail($id);
    return view('pages.booking', compact('property'));
  }
}
