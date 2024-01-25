@props(['label','name'])
<div class="col-md-3">
    <div class="form-group">
        <div class="input-group input-group-static mb-md-6 mb-4 date" id="datepicker">
            <label for="fecha">{{ $label }}</label>
            <input type="text" class="form-control" name="{{$name}}">
            <span class="input-group-addon">
                <span class="input-group-text d-block">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
        </div>
    </div>
</div>
