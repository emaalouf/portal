<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV Creator</title>
</head>
<body>

@include('inc.navbar')

<main>

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">

                    <h2 class="mb-0">Create a professional CV</h2>
                    <p style="color: rgb(15, 11, 5);">Fill in the blanks, choose a template and download your CV in minutes..</p>
                </div>

            </div>
        </div>
    </header>

    <form>
    
        <section class="latest-podcast-section section-padding" id="section_2">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-12">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">

                                <a href="{{ route('save_template', ['template' => 1]) }}">
                                    <img src="images/profile/1.jpg" alt="profile_pic">
                                </a>
                                

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">

                                <a href="{{ route('save_template', ['template' => 2]) }}">
                                    <img src="images/profile/2.jpg" alt="profile_pic">
                                </a>
                                

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                <a href="{{ route('save_template', ['template' => 3]) }}">
                                    <img src="images/resume-6.webp" alt="profile_pic">
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                <a href="{{ route('save_template', ['template' => 4]) }}">
                                    <img src="images/resume-9.webp" alt="profile_pic">
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </form>

</main>

@include('inc.newfooter')

</body>
</html>
