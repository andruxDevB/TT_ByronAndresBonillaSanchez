@foreach ($cruise->cabins as $cabin)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-blog card-plain border">
            <div class="card-body p-3">
                <p class="mb-0 text-sm">{{ $cabin->deck }}</p>
                <h5>{{ $cabin->cabin_name }}</h5>
            </div>
        </div>
    </div>
@endforeach
