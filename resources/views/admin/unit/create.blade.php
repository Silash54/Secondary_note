<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Unit</h5>
                        <a href="{{ route('unit.index') }}" class="btn btn-primary m-auto">Back</a>
                        <form class="row g-3" method="POST" action="{{ route('unit.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="col-12 col-md-8 col-lg-11 mb-3">
                                    <label for="name" class="form-label">Unit Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter unit name" id="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <label for="name" class="form-label">Select Class 8 Course Name <span
                                    class="text-danger">*</span></label>
                                    <select class="form-control" name="course_name" id="">
                                        <option value="">select</option>
                                        @foreach ($course_title8 as $value)
                                            <option value="">{{ $value->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="name" class="form-label">Select Class 9 Course Name <span
                                        class="text-danger">*</span></label>
                                        <select class="form-control" name="course_name" id="">
                                            <option value="">select</option>
                                            @foreach ($course_title9 as $value)
                                                <option value="">{{ $value->title }}</option>
                                            @endforeach
                                        </select>
                                        <label for="name" class="form-label">Select Class 10 Course Name <span
                                            class="text-danger">*</span></label>
                                            <select class="form-control" name="course_name" id="">
                                                <option value="">select</option>
                                                @foreach ($course_title10 as $value)
                                                    <option value="">{{ $value->title }}</option>
                                                @endforeach
                                            </select>
                            </div>
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
