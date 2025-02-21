<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
        <link
            href="/docs/5.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="/img/Logo - 3.png" type="image/png">

    </head>
    <body>
        <header id="mainHeader">
            @include('includes.header')
        </header>

        {{-- SECTION ABOUT --}}
        <!-- About 3 - Bootstrap Brain Component -->
        <section class="py-3 py-md-5">
            <div class="container mb-4 mb-md-5">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-xxl-8">
                        <img
                            class="img-fluid rounded shadow"
                            loading="lazy"
                            src="img/fit.png"
                            alt="About 3">
                    </div>
                </div>
            </div>

            <div class="container overflow-hidden">
                <div class="row gy-2 gy-md-0 justify-content-xxl-center">
                    <div class="col-12 order-md-1 col-md-8 col-xxl-6">
                        <div class="text-center text-md-start">
                            <h2 class="display-3 fw-bold lh-1">Lucas Henry</h2>
                            <p class="text-secondary fs-4 mb-2">UX/UI Designer</p>
                            <hr class="w-25 mx-auto ms-md-0 mb-4 text-secondary">
                            <p>I am a UX/UI designer with a passion for creating user-centric digital
                                experiences that are both beautiful and functional. I have over 12 years of
                                experience in the industry, and I have worked on a wide range of projects, from
                                small startups to large enterprises.</p>
                            <p>I believe that the best designs are those that are based on a deep
                                understanding of the user's needs and goals. I start every project by conducting
                                thorough user research to learn about the user's pain points, motivations, and
                                expectations. I then use this information to create designs that are both easy
                                to use and enjoyable.</p>
                        </div>
                    </div>
                    <div class="col-12 order-md-0 col-md-4 col-xxl-4">
                        <div class="text-center text-md-start me-md-3 me-xl-5">
                            <p class="mb-4">
                                <span class="d-block display-6 lh-1">12+</span>
                                <span class="fs-4 text-secondary">years of experience</span>
                            </p>
                            <div class="d-grid">
                                <button class="btn btn-warning btn-lg" type="button">Hire Me</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION TEAM --}}


        <footer>
            @include('includes.footer')
        </footer>

    </body>
</html>
