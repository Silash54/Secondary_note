<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Course</h5>
                        <a href="{{ route('course.index') }}" class="btn btn-primary m-auto">Back</a>
                        <form class="row g-3" method="POST" action="{{ route('course.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-8 col-lg-11">
                                <label for="subject" class="form-label">Enter Subject <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="subject" class="form-control" id="subject" required>
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="class" class="col-sm-2 col-md-4 col-lg-4 col-form-label">Select Class</label>
                                <div class="col-sm-10 col-md-8 col-lg-8">
                                    <select name="class" id="class" class="form-select">
                                        @foreach ($class as $item)
                                            <option value="{{ $item->id }}">{{ $item->class }}</option>
                                        @endforeach
                                    </select>
                                    @error('class')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-11">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10">
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </textarea>
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
