<div class="row px-3">
    <div class="col-md-6 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="name" value="{{ $hotel->name }}" disabled>
        <label for="name">Hotel Name</label>
    </div>
    <div class="col-md-6 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="category" value="{{ $hotel->category }}" disabled>
        <label for="category">Category</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="name_executive" value="{{ $hotel->name_executive }}" disabled>
        <label for="name_executive">Excutive Sales</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="email" value="{{ $hotel->email }}" disabled>
        <label for="email">Email</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="phone" value="{{ $hotel->phone }}" disabled>
        <label for="phone">Telephone</label>
    </div>
</div>
