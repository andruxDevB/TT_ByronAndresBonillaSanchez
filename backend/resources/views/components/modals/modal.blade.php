@props(['idModal','aria','headerModal','descriptionModal'])
<div class="modal fade" id="{{ $idModal }}" tabindex="-1" role="dialog" aria-labelledby="{{ $aria }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="mb-0 text-primary">{{ $headerModal }}</h4>
                        <p class="mt-0 text-sm">{{ $descriptionModal }}</p>
                    </div>
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
