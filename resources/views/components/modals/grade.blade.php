{{-- Add Subject Modal --}}
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('grade.post') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Subject</label>
                        {{-- Subject Dropdown --}}
                        <select class="form-select" name="subject_id" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a subject.
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label for="code" class="form-label">Student</label>
                        {{-- Student Dropdown --}}
                        <select class="form-select" name="student_id" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a student.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="grade" class="form-label">Grade</label>
                        {{-- Grade Dropdown --}}
                        <select class="form-select" name="grade" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="1">1.00</option>
                            <option value="1.25">1.25</option>
                            <option value="1.50">1.50</option>
                            <option value="1.75">1.75</option>
                            <option value="2.00">2.00</option>
                            <option value="2.25">2.25</option>
                            <option value="2.50">2.50</option>
                            <option value="2.75">2.75</option>
                            <option value="3.00">3.00</option>
                            <option value="5.00">5.00</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a grade.
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <label for="address" class="form-label">Section Code</label>
                        <input type="text" class="form-control" name="address" placeholder="ex. T321">
                    </div> --}}
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach ($grades as $grade)
{{-- Update User Modal --}}
<div class="modal fade" id="updateModal{{$grade->id}}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <form class="row g-3 needs-validation" action="{{ route('grade.update', ['grade' => $grade->id]) }}" method="POST" novalidate>
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="grade" class="form-label">Grade</label>
                        {{-- Grade Dropdown --}}
                        <select class="form-select" name="grade" required>
                            <option selected disabled value="{{ $grade->grade }}">{{ $grade->grade }}</option>
                            <option value="1">1.00</option>
                            <option value="1.25">1.25</option>
                            <option value="1.50">1.50</option>
                            <option value="1.75">1.75</option>
                            <option value="2.00">2.00</option>
                            <option value="2.25">2.25</option>
                            <option value="2.50">2.50</option>
                            <option value="2.75">2.75</option>
                            <option value="3.00">3.00</option>
                            <option value="5.00">5.00</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a grade.
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

