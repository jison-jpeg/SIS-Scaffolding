{{-- Add User Modal --}}
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3 needs-validation" action="{{ route('student.post') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                        <div class="invalid-feedback">
                            Please enter a valid first name.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" required>
                        <div class="invalid-feedback">
                            Please enter a valid address.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="ex. 21"
                            pattern="[0-9]{2}" required>
                        <div class="invalid-feedback">
                            Please provide a valid age number.
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>

@foreach ($students as $student)
{{-- Update User Modal --}}
<div class="modal fade" id="updateModal{{$student->id}}" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

             <form class="row g-3 needs-validation" action="{{ route('student.update', ['student' => $student->id]) }}" method="POST" novalidate>
                @csrf
                @method('PUT')
                <div class="col-md-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
                    <div class="invalid-feedback">
                        Please enter a valid first name.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $student->address }}" required>
                    <div class="invalid-feedback">
                        Please enter a valid address.
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" value="{{ $student->age }}"
                        placeholder="ex. 21" pattern="[0-9]{2}" required>
                    <div class="invalid-feedback">
                        Please provide a valid age number.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
