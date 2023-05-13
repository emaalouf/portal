<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

<!-- cv -->
<div class="cv">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">

        <!-- header -->
        <header class="cv-header">
          <img class="cv-header__img" src="https://selcukcura.com/wp-content/themes/selfolio-2018/img/profile-img/selcuk-cura-young.jpg" data-zoomable>
          <div class="cv-header__text-container">
            <h1 class="cv-header__name">Selçuk Cura <span class="cv-header__name--phonetic">(sel-chook)</span></h1>
            <p class="cv-header__job-title">Front-end developer</p>
          </div>
        </header>

        <!-- content -->
        <section class="cv-section">
          <h2 class="cv-section__title"><i class="fas fa-user fa-fw"></i> Profile</h2>
          <div class="cv-section__wrapper">
            <p class="cv-section__description">I’m a front-end developer with design and animation experience, based in East London. I have over two and a half years of agency experience developing websites, banner adverts and high-impact adverts in the advertising industry. <br><br>
              I decided to pursue a career in the advertising industry after graduating at Ravensbourne. I made a start in my career by working as a front-end developer at Doner, where I built and maintained banner adverts and microsites for clients including Fiat, Jeep, Alfa Romeo, Abarth, Nikon and Huawei. I later worked as a creative developer at Undertone, where I built high-impact adverts for a range of clients including Disney, Duracell, KIA, PayPal and Westfield. <br><br>
              I’m currently looking for new opportunities where I can use my skills and experience to create impactful work and expand my skillset to progress further in my career.</p>
          </div>
        </section>

        <!-- experience -->
        <section class="cv-section">
          <h2 class="cv-section__title"><i class="fas fa-briefcase fa-fw"></i> Experience</h2>
          <div class="cv-section__wrapper">
            
            <!-- freelance -->
            <div class="cv-section__experience">
              <p class="cv-section__role">Freelance – Front-end Developer</p>
              <p class="cv-section__period">February 2018 – Present</p>
              <p class="cv-section__description">Web design and development, logo animation, SEO, content creation & photography.</p>
            </div>
            
            <!-- undertone -->
            <div class="cv-section__experience">
              <p class="cv-section__role">Undertone, Advertising Agency – Creative Developer</p>
              <p class="cv-section__period">June 2017 – January 2018</p>
              <p class="cv-section__description">Development of various high-impact adverts for mobile and desktop platforms.</p>
            </div>
            
            <!-- doner -->
            <div class="cv-section__experience">
              <p class="cv-section__role">Doner, Advertising Agency – Front-end Developer</p>
              <p class="cv-section__period">June 2015 – June 2017</p>
              <p class="cv-section__description">Development of the agency’s global website and other internal projects, built and maintained banner adverts and microsites and helped improve workflows within the dev team.</p>
            </div>

          </div>
        </section>
        
        <!-- education -->
        <section class="cv-section">
          <h2 class="cv-section__title"><i class="fas fa-graduation-cap fa-fw"></i> Education</h2>
          <div class="cv-section__wrapper">
            
            <!-- ravensbourne -->
            <div class="cv-section__experience">
              <p class="cv-section__role">Ravensbourne University London – Web Media BA</p>
              <p class="cv-section__period">2012 – 2015</p>
              <p class="cv-section__description">First-class honours degree.</p>
            </div>
            
            <!-- undertone -->
            <div class="cv-section__experience">
              <p class="cv-section__role">Tower Hamlets College – Art & Design (Interactive Media) BTEC & Media Studies</p>
              <p class="cv-section__period">2010 – 2012</p>
              <p class="cv-section__description">Distinction, Merit, Merit & C.</p>
            </div>
            
            <!-- doner -->
            <div class="cv-section__experience">
              <p class="cv-section__role">Langdon Park School – Graphics, Geography & History</p>
              <p class="cv-section__period">2005 – 2010</p>
              <p class="cv-section__description">13 GCSEs at grades A*-C including English, Maths and Science.</p>
            </div>

          </div>
        </section>

      </div>

      <!-- sidebar -->
      <aside class="col-md-4 cv-sidebar">

        <!-- details -->
        <section class="cv-sidebar-section">
          <h2 class="cv-sidebar-section__title">Details</h2>
          <p class="cv-sidebar-section__description">
            East London, UK <br>
            <a href="tel:0-123-456-7890" rel="nofollow">012 345 67890</a> <br>
            <a href="mailto:example@selcukcura.com" rel="nofollow">example@selcukcura.com</a> <br>
            <a href="https://selcukcura.com" target="_blank">selcukcura.com</a>
          </p>
        </section>

        <!-- skills -->
        <section class="cv-sidebar-section">
          <h2 class="cv-sidebar-section__title">Skills</h2>
          <p class="cv-sidebar-section__description">HTML, CSS, JavaScript, jQuery, Greensock, Bootstrap, SCSS, LESS, WordPress, Handlebars, JSON, AJAX, Git, Gulp, Grunt, SEO.</p>
        </section>

        <!-- tools -->
        <section class="cv-sidebar-section">
          <h2 class="cv-sidebar-section__title">Tools</h2>
          <p class="cv-sidebar-section__description">MacOS, Windows, Atom, Sketch, Photoshop, Illustrator, MAMP, Sourcetree, Bitbucket, Google Analytics.</p>
        </section>

        <!-- interests -->
        <section class="cv-sidebar-section">
          <h2 class="cv-sidebar-section__title">Interests</h2>
          <p class="cv-sidebar-section__description">Minimalism, Animation, Concept Development, Responsive Design, UI Design, UX Design, Interaction Design, Photography.</p>
        </section>

        <!-- languages -->
        <section class="cv-sidebar-section">
          <h2 class="cv-sidebar-section__title">Languages</h2>
          <p class="cv-sidebar-section__description">English, Turkish.</p>
        </section>

      </aside>
    </div>
  </div>

  <style>
    // vars 

$primary-color: #f44336;

// general
body {
  font-family: 'Source Sans Pro', sans-serif;
  line-height: 1.4;
}

a {
  color: inherit;
  word-break: break-all;
  border-bottom: 1px solid #ccc;

  &:hover {
    color: $primary-color;
    text-decoration: none;
    border-bottom-color: currentColor;
  }
}

// cv
.cv {
  background-color: #fff;
  border-top: 5px solid $primary-color;
  max-width: 992px;
  margin-right: auto;
  margin-left: auto;
  padding: 30px 15px;
  box-shadow: 0px 0px 40px -10px rgba(0, 0, 0, 0.3);
}

// header 
.cv-header {
  margin-bottom: 50px;
}

.cv-header__img {
  width: 72px;
  height: 72px;
  border-radius: 100%;
  margin-right: 15px;
  display: none;
}


.cv-header__text-container {
  text-align: left;
  vertical-align: middle;
  display: inline-block;
}

.cv-header__name {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 0;
}

.cv-header__name--phonetic {
  color: #ababab;
  font-style: italic;
}

.cv-header__job-title {
  color: #ababab;
  font-size: 18px;
  margin-bottom: 0;
}

// section (main)
.cv-section {
  border-bottom: 1px solid #eee;
  padding-bottom: 50px;
  margin-bottom: 50px;
}

.cv-section__title {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;

  .fa, .fas {
    margin-right: 2px;
  }
}

.cv-section__wrapper {
  transition: all .15s ease;
}

.cv-section__experience {
  margin-bottom: 25px;
}

.cv-section__role,
.cv-section__period,
.cv-section__description {
  font-size: 18px;
  margin-bottom: 0;
}

.cv-section__role {
  font-weight: 600;  
}

.cv-section__period {
  color: #ababab;
}

// sidebar section
.cv-sidebar-section {
  margin-bottom: 20px;
}

.cv-sidebar-section__title, {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
}

.cv-sidebar-section__description {
  font-size: 18px;
  margin-bottom: 0;
}

// media queries

@media only screen and (min-width: 400px) {

  .cv-header__img {
    display: inline-block;
  }

}

@media only screen and (min-width: 768px) {

  body {
    background-color: $primary-color;
  }

  .cv-header__img {
    width: 90px;
    height: 90px;
    border-radius: 100%;
  }

  .cv-section {
    border-bottom: none;
    padding-bottom: 0;

    &:hover {
      .cv-section__wrapper {
        border-left-color: $primary-color;  
      }
    }
  }

  .cv-section__title {
    margin-bottom: 20px;

    .fa, .fas {
      margin-right: 9px;
    }
  }

  .cv-section__wrapper {
    border-left: 2px solid #eee;
    padding-left: 40px;
    padding-right: 40px;  
  }

}

@media only screen and (min-width: 992px) {

  .cv {
    border-top: none;
    border-radius: 2px; 
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 70px 50px;
  }

}

// lets make this look good if printed too

@media print {

  .cv {
    border-top: none;
  }

}
</style>
<script>
    // click to zoom image
mediumZoom('[data-zoomable]')
</script>