@include('inc.navbar')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>CJ Resume</title>

        <!-- CSSFILES  -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
                        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/bootstrap-icons.min.css">


        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">
        
        
            

            <section class="hero-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="text-center mb-5 pb-2">
                                <h2 class="text-white">Getting your dream job is not that difficult.</h2>

                                <p style="color: rgb(5, 15, 15);">Use our resume templates, professionally reviewed and tested. Editor easy to use and done in minutes Try it for free!.</p>

                                <a href="/login" class="btn custom-btn smoothscroll mt-3">Create My Resume </a>
                                </div> 
                            </div>

                            

                            <div class="owl-carousel owl-theme">
                                <div class="owl-carousel-info-wrap item">
                                    <img src="{{ asset('images/profile/1.jpg') }}" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">
                                            
                                        </h4>

                                        
                                    </div>

                                </div>

                                <div class="owl-carousel-info-wrap item">
                                    <img src="{{ asset('images/profile/2.jpg') }}" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">
                                            
                                        </h4>

                                       
                                    </div>

                                  
                                </div> 

                                <div class="owl-carousel-info-wrap item">
                                    <img src="{{ asset('images/profile/3.jpg') }}" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"></h4>

                                       
                                    </div>

                                    
                                </div>

                                <div class="owl-carousel-info-wrap item">
                                    <img src="{{ asset('images/profile/4.jpg') }}" class="owl-carousel-image img-fluid" alt="">

                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"></h4>

                                        <span class="badge"></span>
                                    </div>

                                    
                                </div>
                                
                                
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
                
            </section>

     
            <section class="trending-podcast-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 style="margin-left: 340px;" class="section-title">What they  about us</h4>
                               
                               <p style="margin-left: 340px;">They got the job they were looking for thanks to CV Design:</p>
                            </div>
                        </div>
                        
 
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap" style="text-align: center;">
  <a href="/CVTemplates">
    <img src="{{ asset('images/Elias.jpeg') }}"class="custom-block-image img-fluid" alt="" style="display: inline-block; ">
  </a>
</div>


                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href="/CVTemplates">
                                         Elias
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">

                                        <p>Without a doubt, a great success for me. In 15 minutes I created my CV and sent it through the email program. Elias Maalouf.
                                            <strong></strong></p>
                                    </div>


                                </div>

                             
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="/CVTemplates">
                                        <img src="images/profile/prooooo.png" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href="/CVTemplates">
                                        Antonella  </a>
                                    </h5>

                                    <div class="profile-block d-flex">

                                        <p>
                                            Very practical to be able to organize all my CVs and requests in one place with CV Design. The templates are gorgeous!
                                        </p>
                                    </div>


                         
                                </div>

                             
                            
                            </div>
                            
                        </div>

                      <div class="col-lg-4 col-12">
  <div class="custom-block custom-block-full">
    <div class="custom-block-image-wrap">
      <a href="/CVTemplates">
        <img src="{{ asset('images/Joseph.JPG') }}" class="custom-block-image img-fluid" alt="">
      </a>
    </div>

    <div class="custom-block-info">
      <h5 class="mb-2">
        <a href="/CVTemplates">
          Joseph
        </a>
      </h5>

      <div class="profile-block d-flex">
        <p>
          I received very positive comments about my CV! I found a good job pretty quickly. I will definitely recommend them.
        </p>
      </div>

    
    </div>
  </div>
</div>


                    </div>
                </div>
            </section>
        </main>


       @include('inc.footer')


        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
