{{-- <footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h5 class="lead footer-hdr">For Job Seekers</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
             <a href="{{route('register')}}" class="footer-links">Register <span class="badge badge-primary">Free</span></a>
             <a href="{{route('login')}}" class="footer-links">Login</a>
             <a href="" class="footer-links">Find jobs</a>
             <a href="#" class="footer-links">Faq</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h5 class="lead footer-hdr">For Employers</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
             <a href="{{route('register')}}" class="footer-links">Register <span class="badge badge-primary">Free</span></a>
             <a href="{{route('login')}}" class="footer-links">Login</a>
             <a href="{{route('post.create')}}" class="footer-links">Vacancy Announcement</a>
             <a href="#" class="footer-links">Faq</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h5 class="lead footer-hdr">Links</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
             <a href="#" class="footer-links">Home</a>
             <a href="#" class="footer-links">About Us</a>
             <a href="#" class="footer-links">Advertise</a>
             <a href="#" class="footer-links">Contact Us</a>
             <a href="#" class="footer-links">Faq</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h3 class="footer-brand mb-2">Jobs</h3>
            <div class="footer-link-list">
             <a href="#" class="footer-links"><i class="fas fa-compass"></i> Newroad,kathmadndu-64400,Nepal</a>
             <a href="tel:98400001511" class="footer-links"><i class="fas fa-phone"></i> +977-6000-000</a>
             <a href="tel:98400001511" class="footer-links"><i class="fas fa-mobile"></i> +977-9840003200</a>
             <a href="mailto:info@Jobs.com" class="footer-links"><i class="fas fa-envelope"></i> info@Jobs.com</a>
             <div class="social-links">
               <a href="https://www.facebook.com" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
               <a href="https://www.twitter.com"  target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
               <a href="https://www.linkedin.com"   target="_blank" class="social-link"><i class="fab fa-linkedin" ></i></a>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

@push('css')
<style>
  .footer-main{
    background-color:#272727;
    color:#ddd;
  }
  .footer-links{
    padding-top:2rem;
    padding-bottom: 2rem;
  }
  .footer-links .footer-hdr{
    color:#ddd;
  }
  .footer-links .footer-link-list .footer-links{
    display:block;
    color:#ccc;
    padding:3px 0; 
    margin:0;
    font-size:.9rem;
  }
  .footer-links .footer-link-list .footer-links:hover{
    color:white;
  }
  .footer-main .social-links {
    margin:20px 0;
  }
  .footer-main .social-links .social-link{
    background-color:white; 
    color:#333;
    padding:8px 10px;
    border-radius: 50%;
    transition:all .3s ease;
  }
  .footer-main .social-links .social-link:hover{
    color:white;
    background-color:#0261A6;
  }
</style>
@endpush --}}


<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="subscribe-form-wrap">
                    <h6>Subscribe. Every weekly.</h6>

                    <form class="custom-form subscribe-form" action="#" method="get" role="form">
                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email Address" required>

                        <button type="submit" class="form-control" id="subscribe-submit">Subscribe</button>
                    </form>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h3 class="footer-heading">Products</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Create CV</a></li>
                    <li><a href="#">CV Templates</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy; 2023 <a href="https://colorlib.com" target="_blank" class="text-primary">CJ Resume</a> All rights reserved | Designed by <a href="https://templatemo.com" target="_blank" class="text-primary">TemplateMo</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
