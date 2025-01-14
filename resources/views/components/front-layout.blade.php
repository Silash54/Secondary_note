<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
</head>
<body>
    <header>
        <x-navbar />
    </header>
    <main>
        {{ $slot }}
    </main>
    <section id="team">
        <div class="container">
            <div class="col-12 text-center mb-3">
                <h2 class="heading">Our Team</h2>
                <hr class="m-auto w-25 h-4">
                <p class="mt-3">A note writer is a tool, application, or system designed to help users create,
                    organize, and manage written notes effectively. It can be as simple as a pen-and-paper system or as
                    advanced as a digital app with features </p>
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
    <footer class="text-center footer-main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="footer-about">
                        <h3>About Us</h3>
                        <p>We are dedicated to providing high-quality content and services to meet your needs. Stay
                            connected with us!</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="footer-links">
                        <h3>Quick Links</h3>
                        <ul class="links d-flex justify-content-around px-md-3 fs-2 ">
                            <li><a href="#home" class="fa-brands fa-facebook text-white"></a></li>
                            <li><a href="#about" class="fa-brands fa-instagram text-white"></a></li>
                            <li><a href="#services" class="fa-brands fa-tiktok text-white"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p>&copy; 2025 All rights reserved. Develop by Silas R@i</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
        integrity="sha512-v/wOVTkoU7mXEJC3hXnw9AA6v32qzpknvuUF6J2Lbkasxaxn2nYcl+HGB7fr/kChGfCqubVr1n2sq1UFu3Gh1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
