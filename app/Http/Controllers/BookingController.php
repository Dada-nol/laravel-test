<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        $properties = Property::all();

        return view('bookings.booking', compact('properties'));
    }
}
