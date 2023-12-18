@props(['submit','back'])
<div class="mt-4">
    <button type="submit" class="btn bg-gradient-dark">{{ $submit }}</button>
    <a href="{{ url()->previous() }}" class="btn btn-link ml-auto" >{{ $back }}</a>
</div>