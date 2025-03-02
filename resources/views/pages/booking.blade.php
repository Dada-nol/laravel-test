<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-primary leading-tight">
      {{ __('Réservation pour') . " " .$property->name }}
    </h2>
  </x-slot>

  <div class="w-auto h-screen pt-5">
    <h2 class="font-semibold text-xl text-primary leading-tight">
      <ul>
        <li>Nom : {{$property->name}}</li>
        <li>Description : {{$property->description}}</li>
        <li>Prix : {{$property->price_per_night}}</li>
      </ul>
    </h2>
    <livewire:booking-manager :property-id="$property->id"></livewire:booking-manager>
  </div>

</x-app-layout>