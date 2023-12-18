@props(['href', 'value'])
<div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-center">
    <a href="{{-- {{ $href }} --}}" class="btn btn-sm bg-gradient-info mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $value }}">
        <div class="d-flex align-items-center justify-content-center">
            <i class="material-symbols-outlined text-lg text-white">add</i>
            <span>&nbsp;&nbsp;{{ $value }}</span>
        </div>
    </a>
</div>