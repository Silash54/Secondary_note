<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Level</h5>
                        <a href="{{ route('course.index') }}" class="btn btn-primary m-auto">Back</a>
                        <form class="row g-3" method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-8">
                                <label for="class" class="form-label">Enter Grade <span class="text-danger">*</span></label>
                                <input type="text" name="class" class="form-control" id="class" required>
                                @error('class')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-8">
                                <label for="syllabus" class="form-label">Enter Syllabus</label>
                                <input type="file" name="syllabus" class="form-control" id="syllabus">
                                @error('syllabus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
