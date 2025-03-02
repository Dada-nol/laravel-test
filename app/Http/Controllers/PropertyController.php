<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function properties()
    {
        $properties = Property::all();

        return view('pages.properties', compact('properties'));
    }
}
