<div class="card ">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Student Lists</h5>
        </div>
        <!-- Table with hoverable rows -->
        <div class="table-responsive ">
            <table class="table table-hover datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Age</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address}}</td>
                        <td>{{ $student->age}}</td>
                        <td>
                            <div class="d-flex justify-content-center">

                                {{-- Update button --}}
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#updateModal{{ $student->id }}">
                                    Edit
                                </button>

                                <div class="mx-1"></div>
                                {{-- Delete button form --}}
                                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>

                                {{-- <a type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                    Delete
                                </a> --}}
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
