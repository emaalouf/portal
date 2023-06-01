<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CV - Ocat</title>
  <meta name="description" content="simple CV example created with HTML and CSS">
  <meta name="author" content="Fly Nerd">
  <link rel="icon" href="./img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    
    <div>
          <h2 style="color:black;">{{$personal_information['first_name']}} {{$personal_information['last_name']}}</h2>

  <img src="assets/images/{{ $personal_information['image_path'] }}" class="name" style="width:20%; float:right;">
    </div>
   
    <p>{{$personal_information['about_me']}} </p>
    <section>
      <a href="{{$contact_information['twitter']}}" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="{{$contact_information['github_link']}}" target="_blank">
        <i class="fab fa-github-alt"></i>
      </a>
      <a href="{{$contact_information['linkedin_link']}}" target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a>
       <a href="{{$contact_information['website']}}" target="_blank">
      </a>
    </section>
  </header>
  <main>
    <h4 style="color:black;">Email: {{$contact_information['email']}}<br /> Phone Number: {{$contact_information['phone_number']}}</h4>
     <section>
      <h3>About Me:</h3>
      <article>
        <div class="descrition">
          {{$personal_information['about_me']}}
        </div>
      </article>
    </section>
  

    <section>
      <h3>Education</h3>
      @foreach($education as $education)
      <article>
        <div class='school'>
          <span>{{$education['edu_start_date']}}-{{$education['edu_end_date']}}</span> <strong>{{$education['institute']}}</strong>
        </div>
        <div class="descrition">
          {{$education['degree_title']}}
        </div>
         <div class="descrition">
          {{$education['education_description']}}
        </div>
      </article>
      @endforeach
    </section>
    <section>
      <h3>Experience</h3>
      @foreach($experience as $experience)
      <article>
        <div class='job-title'>
          <span>{{$experience['job_start_date']}}</span> <strong>{{$experience['organization']}}</strong><br> <strong>Position:</strong> {{$experience['job_title']}} <br /> {{$experience['job_description']}}
        </div>
      </article>
      @endforeach
    </section>

    <section>
      <h3>Skills</h3>
      <div class='skills'>
        <div class='column'>
          @foreach($skills as $skills)
          <div class='job-title'>
            <strong>{{$skills['skill_name']}}</strong>
          </div>
          @endforeach
        </div>
        <div>
          <h4>Languages</h4>
            @foreach($languages as $language)
   
                @if($language['language'] === 'en')
                    English
                @elseif($language['language'] === 'ar')
                    Arabic
                @elseif($language['language'] === 'fr')
                   French
                @elseif($language['language'] === 'es')
                   Spanish
                @else
                    {{ $language['language'] }}
                @endif

    @endforeach
        </div>
      </div>
    </section>
      <section>
      <h3>Interests</h3>
      @foreach($interests as $interest)
      <article class='course'>
        <div class='title'>
          <h4>{{$interest['interest']}}</h4>
        </div>
      </article>
      @endforeach
    </section>
  </main>
  <footer>
    <p>CJ Resume </a> / 2023 </p>
  </footer>
</body>
</html>

<style>

body {
  margin: 0;
  font-family: 'Raleway';
  font-size: 16px;
  line-height: 1.8em;
}

a {
  color: #000;
  text-decoration: none;
}

a:hover {
  opacity: 0.5;
}

article {
  padding:0 1em;
}

section{
  margin: 1em;
  padding: 1em;
}

header, main, footer {
  margin: 0 auto;
}

header {
  padding: 2em;
  text-align: center;
  background-image: url('./img/bg.jpg');
  background-size: cover;
  background-position: fixed;
  color: white;
}

header section {
  margin: 0 auto;
  max-width: 640px;
}

header img {
  border-radius: 50%;
  max-width: 150px;
}

h1 {
  text-transform: uppercase;
  margin: 1em 0;
}

h3 {
  text-transform: uppercase;
}

h3, h4 {
  font-weight: bold;
}

main {
  max-width: 1140px;
}

main section:not(:last-child) {
  border-bottom: 1px solid #ccc;
}

.fab {
  border: 1px solid white;
  border-radius: 50%;
  font-size: 1.5em;
  width: 1.5em;
  height: 1.5em;
  line-height: 1.5em;
  margin: 5px;
  text-align: center;
}

a .fab {
  color: white;
}

.course, .skills {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.course .title {
  color: #000;
  -ms-flex: 0 0 33.3%;
  flex: 0 0 33.3%;
  max-width: 33%;
}

.course .descrition {
  -ms-flex: 0 0 66.6%;
  flex: 0 0 66.6%;
  max-width: 66.6%;
}

.course .descrition p {
  padding-left: 1em;
}

.skills .column {
  -ms-flex: 0 0 50%%;
  flex: 0 0 50%;
  max-width: 50%;
}

.skills .column ul, ul.job-description {
  list-style-type: none;
}

.skills .column ul > li:before {
  content: "►";
  padding-right: 0.5em;
  color: #000;
}

.school, .job-title {
  text-transform: capitalize;
}

.school span, .job-title span {
  color: #889499;
  text-decoration: underline;
}

ul.job-description li:before{
  content: "✔";
  padding-right: 0.5em;
  color: #000;
}

footer {
 padding: 1em 1.5em;
 background: #A7B8BF;
 color: white;
 text-align: right;
}

@media only screen and (max-width: 768px) {
  .course {
    display: block;
  }

  .course .title, .course .descrition {
    max-width: 100%;
  }
}

@media only screen and (max-width: 576px) {
  .skills {
    display: block;
  }

  .skills .column {
    max-width: 100%;
  }

  footer {
    text-align: center;
  }
}
</style>