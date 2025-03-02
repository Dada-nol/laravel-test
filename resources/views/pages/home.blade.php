<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-primary leading-tight">
      {{ __('Accueil')}}
    </h2>
  </x-slot>
  <div class="w-auto h-dvh flex flex-col justify-center gap-3">
    <h1 class="text-3xl font-medium text-primary">{{__("Le bien de vos rêves est seulement à quelques clics") }}</h1>
    <p class="mt-1 text-sm text-gray-600">{{__('Pour réserver ça se passe ici :') }}</p>
    <a href="/properties">
      <x-secondary-button>{{ __('Voir les propriétés') }}</x-secondary-button>
    </a>
  </div>

</x-app-layout>