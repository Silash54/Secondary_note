<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
</head>

<body>
    <header>
        <x-navbar />
    </header>

    <main>
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-12 col-md-12 col-lg-12">
                        <div>
                            <img src="{{ asset('front/image/background.jpg') }}" class="img-fluid h-30" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="information">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="heading">Company Service</h2>
                    <hr class="m-auto w-25 h-4">
                </div>
                <div class="row mt-md-5 mb-md-5">
                    <div class="col-12 col-md-6 col-lg-6 p-4">
                        <h4>Course <span></span></h4>
                        <p class="p-md-4">We provide course materials for various IT courses in Nepal. Currently we have
                            content on BSC. CSIT, BIT and BCA.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 p-4">
                        <h4>Exam special content <span></span></h4>
                        <p class="p-md-4">We provide course materials for various IT courses in Nepal. Currently we have
                            content on BSC. CSIT, BIT and BCA.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="team">
            <div class="container">
                <div class="col-12 text-center mb-3">
                    <h2 class="heading">Our Team</h2>
                    <hr class="m-auto w-25 h-4">
                    <p class="mt-3">A note writer is a tool, application, or system designed to help users create, organize, and manage written notes effectively. It can be as simple as a pen-and-paper system or as advanced as a digital app with features </p>
                </div>
                <div class="row">
                    <!-- Team Member -->
                    <div class="col-12 col-md-6 col-lg-4 text-center mb-4">
                        <img src="{{ asset('front/image/SILAS.jpg') }}" class="img-fluid rounded-circle mb-3 h-50"
                            alt="Silas Rai">
                        <span class="d-block font-weight-bold">Silas Rai</span>
                        <p>Silasraii144@gmail.com</p>
                    </div>
                    <!-- Team Member -->
                    <div class="col-12 col-md-6 col-lg-4 text-center mb-4">
                        <img src="{{ asset('front/image/SILAS.jpg') }}" class="img-fluid rounded-circle mb-3  h-50"
                            alt="Silas Rai">
                        <span class="d-block font-weight-bold">Silas Rai</span>
                        <p>Silasraii144@gmail.com</p>
                    </div>
                    <!-- Team Member -->
                    <div class="col-12 col-md-6 col-lg-4 text-center mb-4">
                        <img src="{{ asset('front/image/SILAS.jpg') }}" class="img-fluid rounded-circle mb-3  h-50"
                            alt="Silas Rai">
                        <span class="d-block font-weight-bold">Silas Rai</span>
                        <p>Silasraii144@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
        integrity="sha512-v/wOVTkoU7mXEJC3hXnw9AA6v32qzpknvuUF6J2Lbkasxaxn2nYcl+HGB7fr/kChGfCqubVr1n2sq1UFu3Gh1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
