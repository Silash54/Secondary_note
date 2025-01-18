<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm">
                    <div class="container">
                        <a href="{{ route('home') }}"><img src="{{ asset('front/image/school.jpg') }}" alt="img"
                                class="img-fluid" style="width: 100px; height: 80px;"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#team">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Class
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @forelse ($level as  $value)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('course_detail', $value->id) }}">{{ $value->class }}</a>
                                            </li>
                                        @empty
                                            <span>No Data found</span>
                                        @endforelse
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-md-auto ms-lg-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
