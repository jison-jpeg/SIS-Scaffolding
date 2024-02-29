<div class="card ">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Grade Lists</h5>
        </div>
        <!-- Table with hoverable rows -->
        <div class="table-responsive">
            <table class="table table-hover datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Student</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                    <tr>
                        <th scope="row">{{ $grade->id }}</th>
                        <td>{{ $grade->subject->name }}</td>
                        <td>{{ $grade->subject->code }}</td>
                        <td>{{ $grade->student->name }}</td>
                        <td>{{ $grade->grade }}</td>

                        <td>
                            <div class="d-flex justify-content-start">
                                 {{-- Update button --}}
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#updateModal{{ $grade->id }}">
                                    Edit
                                </button>

                                <div class="mx-1"></div>
                                {{-- Delete button form --}}
                                <form action="{{ route('grade.destroy', $grade->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>

                                {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                    Delete
                                </button> --}}
                                {{-- <div class="mx-1"></div>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#archiveModal">
                                    Archive
                                </button>
                                <div class="mx-1"></div>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#restoreModal">
                                    Restore
                                </button> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Table with hoverable rows -->
    </div>
</div>
