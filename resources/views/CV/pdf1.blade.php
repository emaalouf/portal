<body>
  <div id="drag" class="cv instaFade wrap">
    <div class="mainDetails">

 <div id="name">
    @foreach($personal_information as $personal_info)
        <h1 class="quickFade delayTwo">{{ 'Name: ' . ($personal_info['first_name'] ?? '') . ' ' . ($personal_info['last_name'] ?? '') }}</h1>
        <h1 class="quickFade delayTwo">{{ 'Title: ' . ($personal_info['profile_title'] ?? '') }}</h1>
        <h1 class="quickFade delayTwo">{{ 'About: ' . ($personal_info['about_me'] ?? '') }}</h1>
    @endforeach
</div>


   <div id="contactDetails" class="quickFade delayFour">
      <ul>
        @foreach($contact_information as $contact_information)				
        <li><a href="mailto:{{$contact_information['email']}}" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
        <li><a href="{{$contact_information['website']}}" title="Website"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
        <li><a href="{{$contact_information['linkedin_link']}}" title="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
        <li><a href="{{$contact_information['github_link']}}" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/{{$contact_information['twitter']}}" title="Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        @endforeach
      </ul>
    </div>

     <div class="clear"></div>
    </div>

    <div id="mainArea" class="quickFade delayFive">
      
      <section>
        <article>
          <div class="sectionTitle">
            <h1>Personal Profile</h1>
          </div>

          <div class="sectionContent">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat
              luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
          </div>
        </article>
        <div class="clear"></div>
      </section>


    <section>
  <div class="sectionTitle">
    <h1>Work Experience</h1>
  </div>

  @foreach($work_experience as $job)
  <div class="sectionContent">
    <article>
      <h3>{{$job['job_title']}} | {{$job['department']}}</h3>
      <h3>{{$job['organization']}}</h3>
      <p class="subDetails">{{$job['job_start_date']}} - {{$job['job_end_date']}}</p>
      <p>{{$job['job_description']}}</p>
    </article>
  </div>
  @endforeach

  <div class="clear"></div>
</section>



      <section>
        <div class="sectionTitle">
          <h1>Key Skills</h1>
        </div>

        <div class="sectionContent">
          <ul class="keySkills">
             @foreach($skill as $skill)
            <li>{{$skill['skill_name']}}</li>
						<li>{{$skill['skill_percentage']}}</li>
            @endforeach
          </ul>
        </div>
        <div class="clear"></div>
      </section>


     <section id="Education">
  <div class="sectionTitle">
    <h1>Education</h1>
  </div>

  @foreach($education as $education)
    <div class="sectionContent">
      <article>
        <h2>{{$education['degree_title']}}</h2>
        <h3>{{$education['institute']}}</h3>
        <p class="subDetails">{{$education['edu_start_date']}} - {{$education['edu_end_date']}}</p>
        <p>{{$education['education_description']}}</p>
      </article>
    </div>
  @endforeach
  
  <div class="clear"></div>
</section>

      <section id="Languages">
        <div class="sectionTitle">
          <h1>Languages</h1>
        </div>

        @foreach($languages as $languages)
        <div class="sectionContent">
          <article>
            <h2>{{$languages['language']}}</h2>
            <h3>{{$languages['language_level']}}</h3>
          </article>
        
        </div> 
            @endforeach         
        <div class="clear"></div>
      </section>


      
      <section>
        <div class="address">
								<div class="item">
									<div class="contactInfo">
										Projects
                    @foreach($projects as $project)
                    {{ $project['project_title'] }}
                    {{ $project['project_description'] }}
                    @endforeach
									</div>
								</div>
							</div>
      </section>
      
      
      
    </div>
  </div>

 

</body>

<style>
    html,
body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
abbr,
address,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
samp,
small,
strong,
sub,
sup,
var,
b,
i,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
summary,
time,
mark,
audio,
video {
  border: 0;
  font: inherit;
  font-size: 100%;
  margin: 0;
  padding: 0;
  vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

/* We need to minimize the use of code, so we will be using roots...this is in the works */
:root {
  --highlight: #a29400;
  --header-font: "Gudea", Helvetica, Arial, sans-serif;
  --content-font: "Lato", Helvetica, Arial, sans-serif;
}

html,
body {
  background: #fff;
  font-family: "Lato", Helvetica, Arial, sans-serif;
  font-feature-settings: "calt","liga","hist","onum","pnum";
  font-size: 1rem;
  color: #222;
}

.clear {
  clear: both;
}

#menu {
  position: fixed;
  right: 0;
  top: 15%;
  width: 8em;
  margin-top: -2.5em;
}

p {
  font-size: 1em;
  line-height: 1.4em;
  margin-bottom: 20px;
  color: #444;
  transition: all 1s linear;
  -o-transition: all 1s linear;
  -moz-transition: all 1s linear;
  -webkit-transition: all 1s linear;
}

a {
  color: inherit;
}

.cv {
 //width: 90%;
  max-width: 54rem;
  background: #fff;
  margin: 30px auto;
}

.cv:hover {
  cursor: grab;
  cursor: -moz-grab;
  cursor: -webkit-grab;
}

.cv:active {
  cursor: grabbing;
  cursor: -moz-grabbing;
  cursor: -webkit-grabbing;
}

.mainDetails {
  padding: 25px 35px;
  border-bottom: 2px solid #cf8a05;
  background: #f3f3f3;
}

#name h1 {
  font-size: 2.5em;
  //font-weight: 700;
  font-family: "Gudea", Helvetica, arial, sans-serif;
  //font-feature-settings: "caps", "sups" 1;
  //margin-bottom: -6px;
}

#name h2 {
  font-size: 2em;
 // margin-left: 2px;
  font-family: "Gudea", Helvetica, arial, sans-serif;
}

#mainArea {
  padding: 0 40px;
}

/* I deeply love breakfast burritos */
.wrap {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.wrap:hover {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

#headshot {
  width: 12.5%;
  float: left;
  margin-right: 30px;
}

#headshot img {
  width: 100%;
  height: auto;
  -webkit-border-radius: 50px;
  border-radius: 50px;
}

#name {
  float: left;
}

#contactDetails {
  float: right;
}

#contactDetails ul {
  list-style-type: none;
  font-size: 0.9em;
  margin-top: 2px;
}

#contactDetails ul li {
  margin-bottom: 3px;
  color: #444;
  display: inline;
}

#contactDetails ul li a,
a[href^="tel"] {
  color: #444;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  -o-transition: all 0.3s ease-in;
  -ms-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
}

#contactDetails ul li a:hover {
  color: #cf8a05;
}

section {
  border-top: 1px solid #dedede;
  padding: 20px 0 0;
}

section:first-child {
  border-top: 0;
}

section:last-child {
  padding: 20px 0 10px;
}

.sectionTitle {
  float: left;
  width: 25%;
}

.sectionContent {
  float: right;
  width: 72.5%;
}

.sectionTitle h1 {
  font-family: "Gudea", helvetica, arial, sans-serif;
  font-size: 0.89em;
  color: #cf8a05;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.sectionContent h2 {
  font-family: "Gudea", helvetica, arial, sans-serif;
  font-size: 1.5em;
  margin-bottom: -2px;
}

.subDetails {
  font-size: 80%;
  //font-style: italic;
  margin-bottom: 3px;
}

.keySkills {
  list-style-type: none;
  -moz-column-count: 3;
  -webkit-column-count: 3;
  column-count: 3;
  margin-bottom: 20px;
  font-size: 1em;
  color: #444;
}

.keySkills ul li {
  margin-bottom: 3px;
}







@media all and (min-width: 602px) and (max-width: 800px) {
  #headshot {
    display: none;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}





@media all and (max-width: 54rem) {
  .cv {
    width: 95%;
    margin: 10px auto;
    min-width: 280px;
    transition: all 0.25s linear;
    -o-transition: all 0.25s linear;
    -moz-transition: all 0.25s linear;
    -webkit-transition: all 0.25s linear;
  }

  #headshot {
    display: none;
  }

  #name,
  #contactDetails {
    float: none;
    width: 100%;
    text-align: center;
  }

  .sectionTitle,
  .sectionContent {
    float: none;
    width: 100%;
  }

  .sectionTitle {
    margin-left: -2px;
    font-size: 1.25em;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}

@media all and (max-width: 480px) {
  .mainDetails {
    padding: 15px 15px;
  }

  section {
    padding: 15px 0 0;
  }

  #mainArea {
    padding: 0 25px;
  }

  .keySkills {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }

  #name h1 {
    line-height: 0.8em;
    margin-bottom: 4px;
  }
}

@media print {
  .cv {
    width: 100%;
  }
}









@-webkit-keyframes reset {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes fade-in {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes reset {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes fade-in {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes reset {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@keyframes fade-in {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.instaFade {
  -webkit-animation-name: reset, fade-in;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-timing-function: ease-in;

  -moz-animation-name: reset, fade-in;
  -moz-animation-duration: 1.5s;
  -moz-animation-timing-function: ease-in;

  animation-name: reset, fade-in;
  animation-duration: 1.5s;
  animation-timing-function: ease-in;
}

.quickFade {
  -webkit-animation-name: reset, fade-in;
  -webkit-animation-duration: 2.5s;
  -webkit-animation-timing-function: ease-in;

  -moz-animation-name: reset, fade-in;
  -moz-animation-duration: 2.5s;
  -moz-animation-timing-function: ease-in;

  animation-name: reset, fade-in;
  animation-duration: 2.5s;
  animation-timing-function: ease-in;
}

.delayOne {
  -webkit-animation-delay: 0, 0.5s;
  -moz-animation-delay: 0, 0.5s;
  animation-delay: 0, 0.5s;
}

.delayTwo {
  -webkit-animation-delay: 0, 1s;
  -moz-animation-delay: 0, 1s;
  animation-delay: 0, 1s;
}

.delayThree {
  -webkit-animation-delay: 0, 1.5s;
  -moz-animation-delay: 0, 1.5s;
  animation-delay: 0, 1.5s;
}

.delayFour {
  -webkit-animation-delay: 0, 2s;
  -moz-animation-delay: 0, 2s;
  animation-delay: 0, 2s;
}

.delayFive {
  -webkit-animation-delay: 0, 2.5s;
  -moz-animation-delay: 0, 2.5s;
  animation-delay: 0, 2.5s;
}
</style>
<script>
    $(function() {
  $("#drag").draggable();
});
</script>