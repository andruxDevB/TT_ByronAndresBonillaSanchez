@props(['imgAvatar', 'nameProfile', 'typeProfile'])
<div class="col-auto">
    <div class="avatar avatar-xl position-relative">
        <img src=" {{ $imgAvatar }} " alt="profile_image" class="w-100 rounded-circle shadow-sm">
    </div>
</div>
<div class="col-auto my-auto">
    <div class="h-100">
        <h5 class="mb-1"> {{ $nameProfile }} </h5>
        <p class="mb-0 font-weight-normal text-sm"> {{ $typeProfile }} </p>
    </div>
</div>