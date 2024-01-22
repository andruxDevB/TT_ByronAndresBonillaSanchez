<x-modals.modal idModal="modal-create-menu" aria="modal-create-menu" headerModal="Add new menu" descriptionModal="Enter new menu information.">
    <form method="POST" action="{{ route('menus.store') }}">
        @csrf
        <input type="hidden" name="idh" value="{{ $restaurant->id }}">
        <div class="input-group input-group-static mb-4">
            <label for="menu_name">Menu Name</label>
            <input type="text" name="menu_name" class="form-control">
            @error('menu_name')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
        <x-buttons.buttonsModals saveModal='Register Menu'></x-buttons.buttonsModals>
    </form>
</x-modals.modal>
