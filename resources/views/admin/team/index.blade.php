<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="d-inline">
                <h5 class="card-title">Our Teams</h5>
                @if (isset($teams) && $teams->count() < 3)
                    <a href="{{ route('teams.create') }}" class="btn btn-primary m-auto">Add</a>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teams as $index=>$value)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td><img src="{{ asset($value->image) }}" alt="{{ $value->image }}" width="130"></td>
                            <td>
                                <a href="{{ route('teams.edit', $value->id) }}" class="fa-regular fa-pen-to-square"></a>
                                <form action="{{ route('teams.destroy', $value->id) }}" method="post" class="d-inline">
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
