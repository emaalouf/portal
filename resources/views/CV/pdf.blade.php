{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CV</title>
  <style>
        body {
            font-size: 16px;
            line-height: 1.5;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0;
        }

            h1 {
        font-size: 36px;
        font-weight: bold;
        margin: 0 0 10px;
        color: #333;
    }

    h2 {
        font-size: 24px;
        font-weight: bold;
        margin: 20px 0 10px;
        color: #333;
    }

    h3 {
        font-size: 18px;
        font-weight: bold;
        margin: 20px 0 10px;
        color: #333;
    }

    p {
        margin: 0 0 10px;
        color: #333;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    li {
        margin: 5px 0;
    }

    .section {
        margin: 50px 0;
    }

    .section h2 {
        margin: 0;
    }

    .section-content {
        margin-left: 20px;
    }

    .section ul {
        margin-left: 20px;
    }

    .section li {
        margin-left: 20px;
    }

    .section h3 {
        margin: 0 0 10px;
    }

    .section p {
        margin-left: 20px;
    }

    .contact-info {
        margin-top: 50px;
    }

    .contact-info p {
        margin: 0;
    }

    .contact-info ul {
        margin-left: 20px;
    }

    .contact-info li {
        margin: 5px 0;
    }

    .education h3,
    .experience h3,
    .skills li {
        color: #333;
    }

    .languages li,
    .interests li {
        color: #666;
    }

    .projects h3,
    .projects p {
        color: #333;
    }
</style>

</head>
<body>
    @foreach($personal_information as $personal_information)
    <h1>Name:{{ $personal_information['first_name'] }} {{ $personal_information['last_name'] }}</h1>
    <p>Profile Title:{{ $personal_information['profile_title'] }}</p>
    @endforeach
    <div class="contact-info section">
        <h2>Contact Information</h2>
        <div class="section-content">
            <ul>
                @foreach($contact_information as $contact_information)
                <li>Email: {{ $contact_information['email'] }}</li>
                <li>Phone Number: {{ $contact_information['phone_number'] }}</li>
                <li>Website: {{ $contact_information['website'] }}</li>
                <li>LinkedIn: {{ $contact_information['linkedin_link'] }}</li>
                <li>Github{{ $contact_information['github_link'] }}</li>
                <li>Twitter{{ $contact_information['twitter'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="education section">
        <h2>Education</h2>
        <div class="section-content">
            @foreach($education as $edu)
                <h3>ID:{{ $edu['user_id']}}</h3>
                <h3>Degree Title:{{ $edu['degree_title']}}</h3>
                <h3>Institute:{{ $edu['institute']}}</h3>
                <h3>Education Start Date:{{ $edu['edu_start_date']}}</h3>
                <h3>Education End Date:{{ $edu['edu_end_date']}}</h3>
                <h3>Description:{{ $edu['education_description']}}</h3>
                @endforeach
        </div>
    </div>

    <div class="experience section">
        <h2>Experience</h2>
        <div class="section-content">
            @foreach($experience as $exp)
                <h3>Job Title:{{ $exp['job_title'] }}</h3>
                <p>Organization{{ $exp['organization'] }}</p>
                <p>Start: {{ $exp['job_start_date'] }} - End: {{ $exp['job_end_date'] }}</p>
                <p>Description:{{ $exp['job_description'] }}</p>
            @endforeach
        </div>
    </div>
    <div class="skills section">
    <h2>Skills</h2>
    <div class="section-content">
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill['skill_name'] }}</li>
                <li>{{ $skill['skill_percentage'] }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="languages section">
    <h2>Languages</h2>
    <div class="section-content">
        <ul>
            @foreach($languages as $lang)
                <li>{{ $lang['language'] }} ({{ $lang['language_level'] }})</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="projects section">
    <h2>Projects</h2>
    <div class="section-content">
        @foreach($projects as $proj)
            <h3>{{ $proj['project_description'] }}</h3>
            <p>{{ $proj['project_title'] }}</p>
        @endforeach
    </div>
</div>

<div class="interests section">
    <h2>Interests</h2>
    <div class="section-content">
        <ul>
            @foreach($interests as $int)
                <li>{{ $int['interest'] }}</li>
            @endforeach
        </ul>
    </div>
</div>

</body>
</html> --}}

<!--  This is my personal modification of the Responsive CV temple made by Eric Traecy (https://codepen.io/erictreacy/pen/EbWmbY).
Please feel free to use on your own.  -->
<div id="drag" class="cv instaFade breakFastBurrito">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            @foreach($personal_information as $info)
                <img src="{{ asset('assets/images/' . ($info['image_path'] ?? 'default.jpg')) }}" />
                Name: {{ ($personal_information['first_name'] ?? '') }} {{ ($personal_information['last_name'] ?? '') }}
            @endforeach
        </div>
        <div id="name">
            Title: {{ ($personal_information['profile_title'] ?? '') }}
            About: {{ ($personal_information['about_me'] ?? '') }}
            <div class="bioDetails">
                <div style="float: left">{{ ($personal_information['date_of_birth'] ?? '') }}</div>
                <div style="float: right">Citizenship: {{ ($personal_information['citizenship'] ?? '') }}</div>
                <div style="margin: 0 auto; width: 100px;">{{ ($personal_information['degree'] ?? '') }}</div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


		<div class="primaryContent">
		<div id="personalArea" class="quickFade delayFour">
			<section>
						<div class="sectionTitle">
							<h1>Basic Info</h1>
						</div>
						<div class="sectionContent">
                            @foreach($contact_information as $contact_information)				
							<div class="phone">
								<div class="item">
									<div class="contactIcon"><i class="fa fa-at fa-fw fa-lg" aria-hidden="true"></i></div>
										<div class="contactInfo">Email:{{$contact_information['email']}}</div>
								</div>
                                <div class="item">
									<div class="contactIcon"><i class="fa fa-at fa-fw fa-lg" aria-hidden="true"></i></div>
										<div class="contactInfo">Website:{{$contact_information['website']}}</div>
								</div>
                                <div class="item">
									<div class="contactIcon"><i class="fa fa-at fa-fw fa-lg" aria-hidden="true"></i></div>
										<div class="contactInfo">LinkedIn:{{$contact_information['linkedin_link']}}</div>
								</div>
                                <div class="item">
									<div class="contactIcon"><i class="fa fa-at fa-fw fa-lg" aria-hidden="true"></i></div>
										<div class="contactInfo">Github:{{$contact_information['github_link']}}</div>
								</div>
                                    <div class="item">
									<div class="contactIcon"><i class="fa fa-at fa-fw fa-lg" aria-hidden="true"></i></div>
										<div class="contactInfo">Twitter:{{$contact_information['twitter']}}</div>
								</div>
							</div>
                            @endforeach
							<div class="address">
								<div class="item">
									<div class="contactIcon"><i class="fa fa-envelope fa-fw fa-lg" aria-hidden="true"></i></div>
									<div class="contactInfo">
										Tenwek Hospital<br/>		
										P.O. Box 39<br/>
										Bomet, Kenya<br/>
										East Africa
									</div>
								</div>
							</div>


						</div>
			</section>			
      <div class="clear"></div>			
		</div>
		
    <div id="mainArea" class="quickFade delayFive">
      <section id="Profile">
        <article>
          <div class="sectionTitle">
            <h1>Personal Profile</h1>
          </div>

          <div class="sectionContent">
            <p>God began to called me to ministry as a while I was on a mission trip to Guatemal with my church. Since then I have pursued his call on my life serving the kingdom by leading ministries, preaching and teaching, pursuing further theological studies, working in support roles, and, as the church confirmed my call, becoming an ordained minister. I am convicted that real change of the heart does not happed through the power of human speech, but only through the power of the living Word coming into close contact with human hearts through reading, speaking, proclaiming, and teaching. </p>
          </div>
        </article>
        <div class="clear"></div>
      </section>

			<section id="credentials">
        <div class="sectionTitle">
          <h1>Ministerial Credentials</h1>
        </div>
        <div class="sectionContent">
          <article>
            <h2>Ordained to the Presbyterate</h2>
						<h3>Diocese of the Rocky Mountains, Anglican Church of North America</h3>
            <p class="subDetails">January 2018</p>
            <p>Ordained by Kenneth Ross, Bishop of the Diocese of the Rocky Mountains. </p>
          </article>

          <article>
            <h2>Ordained to the Diaconate</h2>
						<h3>Diocese of the Rocky Mountains, Anglican Church of North America</h3>
            <p class="subDetails">June 10, 2017</p>
            <p>Ordained by James Hobby, Jr., Bishop of the Diocese of Pittsburgh, on behalf of  Kenneth Ross, Bishop of the Diocese of the Rocky Mountains.</p>
          </article>
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

      <section id="Work">
        <div class="sectionTitle">
          <h1>Work Experience</h1>
        </div>

        <div class="sectionContent">
          <article>
            <h2>Assisting Priest / Transitional Deacon</h2>
            <h3>Saint Thomas Angllican Church, Pittsburgh, PA</h3>
            <p class="subDetails">June 2018 - February 2018</p>
            <p>Assisted in weekly worship, education, pastoral care, and website development.</p>
          </article>

          <article>
            <h2>Developer</h2>
            <h3>English Language Institute China, Fort Collins, CO, U.S.A.</h3>
            <p class="subDetails">January 2014 - December 2018</p>
            <p>Developed Ruby on Rails web applications for employee use.</p>
          </article>

          <article>
             <h2>Mobilization Data and Resource Manager</h2>
            <h3>Englican Language Institute China, Fort Collins, CO, U.S.A.</h3>
            <p class="subDetails">April 2011 - Aug. 2014</p>
            <p>Was the database administrator and developer of a Salesforce CRM instance where I greatly increased usability and efficiency of the department. Supported the department in other administrative tasks as well. Was named the Employee of the Year in 2013 by my peers.</p>
          </article>
          
           <article>
            <h2>Young Adult Ministry Intern</h2>
             <h3>Hope Chapel, Kiehi, HI, U.S.A.</h3>
            <p class="subDetails">August 2009 - August 2010</p>
            <p>Gained skills in community formation and outreach. Helped develop and empower a volunteer leadership team for the young adult community. Organized the majority of events for the year.</p>
          </article>          
          
           <article>
            <h2>Field Technician</h2>
            <h3>All Phase Restoration, Windsor, CO, U.S.A.</h3>
            <p class="subDetails">Summer 2007, September 2008 - July 2009</p>
            <p>Worked to mitigate the effects of water and fire damage in commercial and residential units. Suggested and developed an electronic paperwork system resulting in increased efficiency.</p>
          </article>          
        </div>         
        <div class="clear"></div>
      </section>


<!--       <section>
        <div class="sectionTitle">
          <h1>Key Skills</h1>
        </div>

        <div class="sectionContent">
          <ul class="keySkills">
            <li>A Key Skill</li>
            <li>A Key Skill</li>
            <li>A Key Skill</li>
            <li>A Key Skill</li>
            <li>A Key Skill</li>
            <li>A Key Skill</li>
            <li>A Key Skill</li>
            <li>A Key Skill</li>
          </ul>
        </div>
        <div class="clear"></div>
      </section> -->




      
<!--       <section>
        <article>
          <div class="sectionTitle">
            <h1>Publications</h1>
          </div>

          <div class="sectionContent">
            <p> Jin, Lei, Mogan, Jennifer, et al. "STING/MPYS mediates host defense against listeria monocytogenes infection by regulating Ly6Chi monocyte migration." The Journal of Immunology 190.6 (2013): 2835-2843.</p> 
          </div>
          
          <div class="sectionContent">
            <p>Knowles, Heather, Mogan, Jennifer, et al. "Transient Receptor Potential Melastatin 2 (TRPM2) ion channel is required for innate immunity against Listeria monocytogenes." Proceedings of the National Academy of Sciences 108.28 (2011): 11578-11583.</p>
          </div>
          
          <div class="sectionContent">
            <p>Jin, Lei, Mogan, Jennifer, et al. "MPYS is required for IFN response factor 3 activation and type I IFN production in the response of cultured phagocytes to bacterial second messengers cyclic-di-AMP and cyclic-di-GMP." The Journal of Immunology 187.5 (2011): 2595-2601.</p>
          </div>
          
        </article>
        <div class="clear"></div>
      </section> -->
      
      
      
    </div>
		</div>
  </div>

  <script type="text/javascript">

  </script>

</body>
</html>

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
	box-sizing: border-box;
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
  --highlight: #cf8a05;
  --header-font: "Gudea", Helvetica, Arial, sans-serif;
  --content-font: "Lato", Helvetica, Arial, sans-serif;
}

html,
body {
  background: #fff;
  font-family: "Lato", Helvetica, Arial, sans-serif;
  font-size: 16px;
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

i {
	margin-right:10px;
}

.cv {
  width: 90%;
  max-width: 800px;
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

.primaryContent{
	display:flow-root;
}
.mainDetails {
  padding: 25px 35px 5px;
  border-bottom: 2px solid #cf8a05;
  background: #f3f3f3;
}

.bioDetails{
	margin-top:30px;
	font-size:.75em;
}

#name h1 {
  font-size: 2.5em;
  font-weight: 700;
  font-family: "Gudea", Helvetica, arial, sans-serif;
  margin-bottom: -6px;
}

#name h2 {
  font-size: 2em;
  margin-left: 2px;
  font-family: "Gudea", Helvetica, arial, sans-serif;
}

#personalArea{
	padding: 0 40px; 
}

#mainArea {
  padding: 0 40px;
}

.phone{
	float:left;
}

.address{
	float:right;
}

.contactIcon{
	float:left;
}

.contactInfo{
	float:left;
}

.item{
	height:2em;
}

/* I deeply love breakfast burritos */
.breakFastBurrito {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.breakFastBurrito:hover {
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

#personalArea section:first-child {
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
  font-size: 0.8em;
  font-style: bold;
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

@media all and (min-width:801px){
	#personalArea{
		padding: 0 20px;
		width:34%;
		float: right;
	}
	
	.phone, .address{
		width:100%;		
	}

	#mainArea {
		padding: 0 20px;
		width: 66%;
		float: left;
	}	
	.sectionTitle {
		float: left;
		width: 100%;
			margin-bottom:1em;
		font-size:1.25em;
	}

	.sectionContent {
		float: right;
		width: 100%;
	}
	
	section:first-child {
  border-top: 0;
	}

}

@media all and (min-width: 643px) and (max-width: 800px) {
  #headshot {
    display: none;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}

@media all and (max-width: 642px) {
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
	
	.phone, .address{
		width:100%;
	}

  section {
    padding: 15px 0 0;
  }

  #mainArea, #personalArea {
    padding: 0 25px;
  }

  .keySkills {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }

  #name h1 {
    line-height: 1em;
    margin-bottom: 4px;
  }
}

@page {
  size: 210mm 297mm;
  margin: 25cm;
}

@media print {
	
  .cv {
    width: 100%;
  }
	/* I deeply love breakfast burritos */
	.breakFastBurrito {
		box-shadow: none;
		transition: none;
	}

	.breakFastBurrito:hover {
		box-shadow: none;
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

<script>
    $(function() {
  $("#drag").draggable();
});
</script>