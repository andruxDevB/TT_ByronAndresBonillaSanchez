@props(['routeView','routeEdit'])
<a href="{{ $routeView }}" rel="tooltip" class="btn btn-info btn-link btn-sm" data-original-title="" title="View">
    <i class="material-icons fs-6">visibility</i>
    <div class="ripple-container"></div>
</a>
<a href="{{ $routeEdit }}" rel="tooltip" class="btn btn-success btn-link btn-sm" data-original-title="" title="Edit">
    <i class="material-icons fs-6">edit</i>
    <div class="ripple-container"></div>
</a>
