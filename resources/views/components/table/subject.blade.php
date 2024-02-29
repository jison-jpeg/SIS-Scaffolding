<div class="card ">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Subject Lists</h5>
        </div>
        <!-- Table with hoverable rows -->
        <div class="table-responsive">
            <table class="table table-hover datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Subject Description</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                    <tr>
                        <th scope="row">{{ $subject->id }}</th>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->code }}</td>
                        <td>{{ $subject->description }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#updateModal">
                                    Edit
                                </button>
                                <div class="mx-1"></div>
                                {{-- Delete button form --}}
                                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST">
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
