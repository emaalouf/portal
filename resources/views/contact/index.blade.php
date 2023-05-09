      <html>
      
      @include('inc.navbar')



            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">

                            <h2 class="mb-0">Contact </h2>
                        </div>

                    </div>
                </div>
            </header>
            

            <section class="section-padding" id="section_2">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12 pe-lg-5">
                            <div class="contact-info">
                                <h3 class="mb-4">We love to help you. Get in touch</h3>

                                <p class="d-flex border-bottom pb-3 mb-4">
                                    <strong class="d-inline me-4">Phone:</strong>
                                    <span>(+961) 70 21 33 52</span>
                                </p>

                                <p class="d-flex border-bottom pb-3 mb-4">
                                    <strong class="d-inline me-4">Email:</strong>
                                    <a href="#">CJonline@info.com</a> 
                                </p>

                                <p class="d-flex">
                                    <strong class="d-inline me-4">Location:</strong>
                                    <span>44 Street, Downtown, Lebanon</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.4840193107275!2d35.51945361511657!3d33.89379198064072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1e7c8ed50d99%3A0x2a2fbce8148ac9a9!2sBeirut%2C%20Lebanon!5e0!3m2!1sen!2smy!4v1669212183861!5m2!1sen!2smy" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section section-padding pt-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">You know, Contact Form</h4>
                            </div>

                            <form action="{{ route('contact-us.send') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" required="">
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Subject</label>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                            
                                            <label for="floatingTextarea">Describe message here</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" onclick="ContactUs()" class="form-control">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>


       @include('inc.footer')


    </body>
</html>

