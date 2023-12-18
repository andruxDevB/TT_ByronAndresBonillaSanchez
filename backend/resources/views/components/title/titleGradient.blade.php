@props(['icon','title'])
<div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-3">
    <div class="text-white text-center me-2 d-flex align-items-center">
        <i class="ps-3 pe-2 material-icons text-center opacity-10"> {{ $icon }} </i>
        <span class="text-white ms-3 mt-1"> {{ $title }} </span>
    </div>
</div>
