<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="d-inline">
                <h5 class="card-title">Level</h5>
                <a href="{{ route('level.create') }}" class="btn btn-primary m-auto">Add</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class</th>
                        <th scope="col">Syllabus</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($level as $index=>$value)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $value->class }}</td>
                        <td>{{ $value->syllabus }}</td>
                        <td>
                            <a href="{{ route('level.edit',$value->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('level.destroy',$value->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('POST')
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
