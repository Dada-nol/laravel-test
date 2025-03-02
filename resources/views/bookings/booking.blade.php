<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-primary leading-tight">
      {{ __('Réservation')}}
    </h2>
  </x-slot>

  <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 pt-6 pb-6">
    @foreach ($properties as $property)
    <li>
      <x-card>
        <p class="text-lg font-semibold text-primary">Name : {{$property->name}}</p>
        <p class="text-gray-400 font-semibold">Description: {{ $property->description}}</p>
        <p class="text-gray-800 font-bold">Price : {{ $property->price_per_night}}</p>
        <x-secondary-button>{{ __('Réserver') }}</x-secondary-button>
      </x-card>
    </li>
    @endforeach
  </ul>
</x-app-layout>