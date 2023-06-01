<!DOCTYPE html>
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
                <p class="about-text">
                  @foreach($AboutPage as $about)
                    {{$about['content']}}
                  @endforeach
                </p>

                <!-- Mission and Vision -->
                <h2>Mission and Vision</h2>
                <p>Our mission is to help people create professional CVs. Our vision is to be the leading provider of CV creation tools and services.</p>

                <!-- Core Values -->
                <h2>Core Values</h2>
                <p>Our core values are:
                  * Excellence
                  * Innovation
                  * Customer satisfaction</p>

                <!-- Team Members/Leadership -->
                <h2>Our Team</h2>
                <p>Our team is made up of experienced professionals who are passionate about helping people create professional CVs. We are committed to providing our customers with the best possible service.</p>

                <!-- Services/Products -->
                <h2>Our Services/Products</h2>
                <p>We offer a variety of services and products to help people create professional CVs, including:
                  * CV templates
                  * CV writing assistance
                  * CV editing services</p>

                <!-- Client Testimonials -->
                <h2>Client Testimonials</h2>
                <p>We are proud to have a number of satisfied customers who have used our services to create professional CVs. Here are some of their testimonials:
                  * "I was very impressed with the quality of the CV that I received from CJ Platform. The writer took the time to understand my needs and created a CV that was tailored to my specific requirements. I would highly recommend CJ Platform to anyone who is looking for help with creating a professional CV." - John Smith
                  * "I was very happy with the services provided by CJ Platform. The writer was very professional and helpful, and I was very pleased with the final product. I would definitely recommend CJ Platform to anyone who is looking for help with creating a CV." - Jane Doe</p>

                <!-- Awards and Recognition -->
                <h2>Awards and Recognition</h2>
                <p>We have been recognized for our excellence in CV creation by a number of industry awards, including:
                  * "Best CV Writing Service" - 2022 CV</p>

                 <!-- Social Responsibility/Philanthropy -->
                <h2>Social Responsibility</h2>
                <p>We are committed to giving back to our community. We support a number of social responsibility initiatives, including:
                  * The CJ Platform Foundation, which provides scholarships to students pursuing careers in the workforce development field.
                  * The CJ Platform Volunteer Program, which allows our employees to volunteer their time to local organizations.</p>

                <!-- Partnerships/Collaborations -->
                <h2>Partnerships and Collaborations</h2>
                <p>We are committed to building strong partnerships with other organizations. We collaborate with a number of organizations, including:
                  * The Workforce Development Council, which helps to connect job seekers with employment opportunities.
                  * The Chamber of Commerce, which advocates for the interests of businesses in our community.</p>
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