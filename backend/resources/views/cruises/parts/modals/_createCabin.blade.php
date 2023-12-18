<x-modals.modal idModal="modal-create-cabin" aria="modal-create-cabin" headerModal="Add new cabin" descriptionModal="Enter new cabin information.">
    <form method="POST" action="{{ route('cabins.store') }}">
        @csrf
        <input type="hidden" name="idc" value="{{ $cruise->id }}">
        <div class="input-group input-group-static mb-4">
            <label for="cabin_name">Cabin Name</label>
            <input type="text" name="cabin_name" class="form-control">
            @error('cabin_name')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
        <div class="input-group input-group-static mb-4">
            <label for='deck'>Deck</label>
            <select class="form-control" name="deck">
                <option value="Main Deck">Main Deck</option>
                <option value="Upper Deck">Upper Deck</option>
                <option value="Lower Deck">Lower Deck</option>
            </select>
            @error('deck')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
        <x-buttons.buttonsModals saveModal='Create Cabin'></x-buttons.buttonsModals>
    </form>
</x-modals.modal>
