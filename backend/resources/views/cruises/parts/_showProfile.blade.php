<div class="row px-3">
    <div class="col-md-6 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="name" value="{{ $cruise->name }}" disabled>
        <label for="name">Cruise Name</label>
    </div>
    <div class="col-md-6 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="category" value="{{ $cruise->category }}" disabled>
        <label for="category">Category</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="name_executive" value="{{ $cruise->name_executive }}" disabled>
        <label for="name_executive">Excutive Sales</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="email" value="{{ $cruise->email }}" disabled>
        <label for="email">Email</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input type="text" class="form-control" name="phone" value="{{ $cruise->phone }}" disabled>
        <label for="phone">Telephone</label>
    </div>
</div>
