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
    .about-text p {
      font-style: italic;
      font-weight: bold;
    }
    p {
      font-style: italic;
      font-weight: bold;
      font-family: Helvetica;
    }
    /* Full-width style */
    .full-width {
      width: 100%;
      padding-left: 0;
      padding-right: 0;
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

    <section class="about-section section-padding full-width" id="section_2">
      <div class="row">
        <div class="col-lg-12 col-12 mx-auto">
          <div class="pt-5 mt-5">
            <div class="section-title-wrap mb-12">
              <h1 class="section-title">CJ Platform - About US</h1>
            </div>
            <div class="d-flex">
              <div class="col mt-12">
              

                <!-- Our Story/Company History -->
                <h2>Our Story</h2>
                <p>  @foreach($AboutPage as $about)
                  <p class="about-text"><em><strong>{{$about['content']}}</strong></em></p>
                @endforeach</p>

                <!-- Mission and Vision -->
                <h2>Mission and Vision</h2>
                <p>Describe your company's mission and vision statements here.</p>

                <!-- Core Values -->
                <h2>Core Values</h2>
                <p>Outline your company's core values and guiding principles.</p>

                <!-- Team Members/Leadership -->
                <h2>Our Team</h2>
                <p>Introduce key members of your team or leadership with their bios and photos.</p>

                <!-- Services/Products -->
                <h2>Our Services/Products</h2>
                <p>Describe the services or products your company offers.</p>

                <!-- Client Testimonials -->
                <h2>Client Testimonials</h2>
                <p>Include testimonials from satisfied clients or customers.</p>

                <!-- Awards and Recognition -->
                <h2>Awards and Recognition</h2>
                <p>Showcase any awards, certifications, or industry recognition you have received.</p>

                <!-- Social Responsibility/Philanthropy -->
                <h2>Social Responsibility</h2>
                <p>Highlight your company's social responsibility efforts or philanthropic activities.</p>

                <!-- Partnerships/Collaborations -->
                <h2>Partnerships and Collaborations</h2>
                <p>Showcase your strategic partnerships or collaborations with other organizations.</p>
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