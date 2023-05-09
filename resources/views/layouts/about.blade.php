<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Professional CV Now</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .about-image img {
            width: 100%;
            max-width: 600px;
            height: auto;
        }
    </style>
</head>
<body>
    <main>

    @include('inc.navbar')

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <!-- Header content goes here -->
            </div>
        </div>
    </header>

    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="pb-5 mb-5">
                        <div class="section-title-wrap mb-4">
                            <h1 class="section-title">Create Your Professional CV Now</h1>
                        </div>
                       <div class="d-flex">
                            <div class="col about-text">
                                <p>The most widely used and known CV is the chronological CV. This means that, for example your studies or your work experiences, will be represented following an inverse chronological structure: The last job you have had (the most recent) is mentioned at the beginning (above), the first job you had is mentioned in the bottom. To carry out this process in an optimal and fast way, we have developed a generator with which you can reorder all the content as required.</p>
                                <p>Mention only relevant information that has added value for the vacancy you are applying for and that is interesting to your future employer.</p>
                                <p>Indicate the most important information on the first page. Add a concise personal profile about yourself.</p>
                                <p>Use enumeration points, bullets, and hyphens to make your CV transparent to recruiting staff.</p>
                            </div>
                            <div class="col about-image d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/profile/2.jpg') }}" class="mt-5 img-fluid larger-image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.footer')
</main>
</body>
</html>
