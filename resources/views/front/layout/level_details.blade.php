<x-front-layout>
<div class="container">
    <div class="container">
        <div class="row">
            <h2 class="text-center my-5">NEB Courses</h2>
            <div class="col-md-10 text-center">
                <h3>Class {{ $level->class }} Courses</h3>
                <ul>
                    @foreach ($level->course as $value)
                    <li> <a href="">{{ $value->title }}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</x-front-layout>