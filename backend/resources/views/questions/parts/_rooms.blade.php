@foreach ($hotel->rooms as $room)
    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
        <div class="card card-blog card-plain border">
            <div class="card-body p-3">
                <p class="mb-0 text-sm">Room</p>
                <h5>{{ $room->name }}</h5>
            </div>
        </div>
    </div>
@endforeach
