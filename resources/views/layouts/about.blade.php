<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>CJ Resume</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
                        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">


    </head>
    
    <body>

        <main>

            @include('inc.navbar')


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

            
                    </div>
                </div>
            </header>
            

            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="pb-5 mb-5">
                                <div class="text-center mb-4">
                                    <button class="btn btn-primary">Create Now</button>
                                </div>
                                <div class="section-title-wrap mb-4">
                                    <h4 class="section-title">Create Your Profesional CV Now</h4>
                                </div>

                            <div> <p style="color: rgba(14, 13, 11, 0.938);"></p>The most widely used and known CV is the chronological CV. This means that, for example your studies or your work experiences, will be represented following an inverse chronological structure: The last job you have had (the most recent) is mentioned at the beginning (above), the first job you had is mentioned in the bottom. To carry out this process in an optimal and fast way, we have developed a generator with which you can reorder all the content as required.

                                    Mention only relevant information that has added value for the vacancy you are applying for and that is interesting to your future employer.
                                    
                                    Indicate the most important information on the first page. Add a concise personal profile about yourself.
                                    
                                    Use enumeration points, bullets, and hyphens to make your CV transparent to recruiting staff.</p>
                                </div>

                                <img src="{{ asset('images/profile/2.jpg') }}" class="about-image mt-5 img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                        
                        
                     

        @include('inc.footer')
        </main>




    </body>
</html>

