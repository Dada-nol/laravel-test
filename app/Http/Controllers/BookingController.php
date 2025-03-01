<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        $users = User::all();

        return view('bookings.booking', compact('users'));
    }
}
