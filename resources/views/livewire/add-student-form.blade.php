<form wire:submit.prevent="submitForm" class="row g-3">
    @csrf
    <div class="col-md-4">
        <label for="name" class="form-label">Name</label>
        <input wire:model.defer="name" type="text" class="form-control">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="address" class="form-label">Address</label>
        <input wire:model.defer="address" type="text" class="form-control">
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 col-sm-6">
        <label for="age" class="form-label">Age</label>
        <input wire:model.defer="age" type="number" class="form-control" placeholder="ex. 21">
        @error('age')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
    </div>
</form>
