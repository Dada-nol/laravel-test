<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookingManager extends Component
{
    public $property;
    public $start_date;
    public $end_date;

    public function mount($propertyId)
    {
        $this->property = Property::findOrFail($propertyId);
    }

    public function createBooking()
    {
        $user = Auth::user();

        if (!$user) {
            session()->flash('error', 'Vous devez être connecté pour réserver.');
            return;
        }

        Booking::create([
            'user_id' => $user->id,
            'property_id' => $this->property->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('success', 'Réservation effectuée avec succès !');
    }

    public function render()
    {
        return view('livewire.booking-manager', ['property' => $this->property]);
    }
}
