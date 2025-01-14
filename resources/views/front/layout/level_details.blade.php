<x-front-layout>
    <div class="container d-flex justify-content-center align-items-center ">
        <div class="text-center">
            <h2 class="my-5">NEB Board</h2>
            <div class="col-sm-12 col-md-12 col-lg-12 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="fs-3 border border-dark rounded bg-light p-3 text-center">
                                Class {{ $level->class }} Courses
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($level->course as $value)
                            <tr>
                                <td><a href="{{ route('course_syllabus',$level->id) }}" class="fs-5">{{ $value->title }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-front-layout>
