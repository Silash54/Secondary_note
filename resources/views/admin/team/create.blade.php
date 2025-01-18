<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Teams</h5>
                        <a href="{{ route('teams.index') }}" class="btn btn-primary m-auto">Back</a>
                        <form class="row g-3" method="POST" action="{{ route('teams.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="col-12 col-md-8 col-lg-11">
                                    <label for="name" class="form-label">Enter Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-8 col-lg-11">
                                    <label for="phone" class="form-label">Enter phone <span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="phone" class="form-control" id="phone" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12 col-md-8 col-lg-11">
                                    <label for="email" class="form-label">Enter email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                    <div class="col-12 col-md-8 col-lg-11">
                                        <label for="image" class="form-label">Enter image <span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            required>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
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
