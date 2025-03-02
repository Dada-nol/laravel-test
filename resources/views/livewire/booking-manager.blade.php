<form wire:submit.prevent="createBooking">

    <label for="start_date">Date de début :</label>
    <input type="date" id="start_date" wire:model="start_date">

    <label for="end_date">Date de fin :</label>
    <input type="date" id="end_date" wire:model="end_date">

    <button type="submit">{{ __('Réserver maintenant') }}</button>
</form>