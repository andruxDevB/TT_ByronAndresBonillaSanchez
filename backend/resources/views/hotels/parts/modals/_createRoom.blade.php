<x-modals.modal idModal="modal-create-room" aria="modal-create-room" headerModal="Add new room" descriptionModal="Enter new room information.">
    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        <input type="hidden" name="idh" value="{{ $hotel->id }}">
        <div class="input-group input-group-static mb-4">
            <label for="room_type">Room Name</label>
            <input type="text" name="room_type" class="form-control">
            @error('room_type')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
        <x-buttons.buttonsModals saveModal='Create Room'></x-buttons.buttonsModals>
    </form>
</x-modals.modal>
