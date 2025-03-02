<form wire:submit.prevent="createBooking">

    <label for="start_date">Date de début :</label>
    <input type="date" id="start_date" wire:model="start_date">

    <label for="end_date">Date de fin :</label>
    <input type="date" id="end_date" wire:model="end_date">

    <button type="submit" wire:click="redirectToHome">{{ __('Réserver maintenant') }}</button>

    </br>
    @error('start_date') <span class="text-red-500">{{ $message }}</span> @enderror
    @error('end_date') <span class="text-red-500">{{ $message }}</span> @enderror

    @if (session()->has('success'))
    <div class="text-green-500">{{ session('success') }}</div>
    @endif

</form>