<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="d-inline">
                <h5 class="card-title">Courses</h5>
                <a href="{{ route('course.create') }}" class="btn btn-primary m-auto">Add</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        <th scope="col">Class</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($course as $index=>$value)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ $value->level->class }}</td>
                        <td>
                            <a href="{{ route('course.edit', $value->id) }}" class="fa-regular fa-pen-to-square"></a>
                            <form action="{{ route('course.destroy',$value->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <span class="tex-danger">No Data found</span>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
