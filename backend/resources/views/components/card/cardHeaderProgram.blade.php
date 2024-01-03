@props(['title', 'icon'])
<div class="card-header p-0 position-relative mt-n4 mx-3 mb-3 z-index-2">
    <div class="d-flex align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <div class="w-100">
            <h6 class="text-white mx-3">{{ $title }}</h6>
        </div>
        <div class="flex-shrink-1 pe-3">
            <a href="#collapseExample" role="button" data-bs-toggle="modal" data-bs-target="#modal-domesticflight">
                <i class="material-symbols-outlined text-white fs-4">{{ $icon }}</i>
            </a>
        </div>
    </div>
</div>
