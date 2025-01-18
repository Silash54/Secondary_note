<x-front-layout>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-between">
                    <x-button name="Note" :route="route('note.index')" />
                    <x-button name="Old Question" :route="route('note.index')" />
                    <x-button name="Unit" :route="route('note.index')" />
                    <x-button name="Question Bank" :route="route('note.index')" />
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid mx-5">
            <div class="row my-5">
                <div class="col-md-10">
                    <h2 class="offset-lg-6">Class 8 Syllabus</h2>
                    <hr>
                    @if (file_exists(public_path($syllabusDetails->syllabus)))
                        <iframe src="{{ asset($syllabusDetails->syllabus) }}" width="100%" height="600px"
                            style="border: none;"></iframe>
                    @else
                        <p>No syllabus available</p>
                    @endif
                </div>
                <div class="col-md-2  p-2">
                    <div class="latest-news m-auto">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Latest-Update
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Most modern browsers support inline PDF rendering.
                                    However, older browsers might not.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-front-layout>
