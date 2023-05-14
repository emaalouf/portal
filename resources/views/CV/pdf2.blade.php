<div class="cv">
  <div class="cv-row">
    <div class="cv-wrap">
@foreach($personal_information as $personal_info)
    <div class="cv-name">{{ 'Name: ' . ($personal_info['first_name'] ?? '') }}</div>
    <div class="cv-subname">{{ 'Title: ' . ($personal_info['profile_title'] ?? '') }}</div>
    <div class="cv-subname">{{ 'About: ' . ($personal_info['about_me'] ?? '') }}</div>
@endforeach
<div id="contactDetails" class="quickFade delayFour">
  @foreach($contact_information as $contact_information)				
  <ul>
    <li><a href="mailto:{{$contact_information['email']}}" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
    <li><a href="{{$contact_information['website']}}" title="Website"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
    <li><a href="{{$contact_information['linkedin_link']}}" title="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
    <li><a href="{{$contact_information['github_link']}}" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
    <li><a href="https://twitter.com/{{$contact_information['twitter']}}" title="Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
  </ul>
  @endforeach
</div>

      <div class="cv-content">
        <div class="head-title">Exprecince</div>
        <div class="cv-content-item">
          <div class="title">Senior Frontend Developer</div>
          <div class="subtitle">Enterprise Name</div>
          <div class="time">Aug 2020 - Present - 1 year, Paris</div>
          <div class="exprecince">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a ante pulvinar, consectetur ante et.</div>
        </div>
        <div class="cv-content-item">
          <div class="title">Frontend Developer</div>
          <div class="subtitle">Enterprise Name</div>
          <div class="time">Jan 2017 - 3 year, Turkey</div>
          <div class="exprecince">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a ante pulvinar, consectetur ante et.</div>
        </div>
        <div class="cv-content-item">
          <div class="title">Frontend Developer</div>
          <div class="subtitle">Enterprise Name</div>
          <div class="time">Oct 2015 - 2 year, Turkey</div>
          <div class="exprecince">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a ante pulvinar, consectetur ante et.</div>
        </div>
        <div class="cv-content-item">
          <div class="title">Frontend Developer</div>
          <div class="subtitle">Enterprise Name</div>
          <div class="time">Nov 2018 - 1 year, USA</div>
          <div class="exprecince">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a ante pulvinar, consectetur ante et.</div>
        </div>

      </div>
    <div class="cv-content">
  <div class="head-title">Education</div>
  @foreach ($educationData as $education)
    <div class="cv-content-item">
      <div class="title">{{$education['degree_title']}}</div>
      <div class="subtitle">{{$education['institute']}}</div>
      <div class="time">{{$education['edu_start_date']}} - {{$education['edu_end_date']}}</div>
      <div class="exprecince">{{$education['education_description']}}</div>
    </div>
  @endforeach
  </div>
  

    </div>

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
    <div class="cv-wrap">
      <div class="avatar">
        <img src="https://image-aws-us-west-2.vsco.co/04d5df/155672998/5ee7bf4f43a34b5b3c000002/720x960/vsco5ee7bf53b94de.jpg" alt="" />
      </div>
      <div class="info">
        <div class="title">Contact</div>
        <p><a href="mailto:info@ahmetaksungur.com">info@yourmail.com</a></p>
        <p><a href="tel:+905555554444">+90 555 444 1500</a></p>
        <p></p>
      </div>
      <div class="cv-skills">
        <div class="head-title">Primary Skills
        </div>
        <div class="cv-skills-item">
          @foreach($skill as $skill)
            <h2>{{$skill['skill_name']}}</h2>
						<h3>{{$skill['skill_percentage']}}</h3>
            @endforeach
        </div>

      </div>
      <div class="cv-skills">
        <div class="head-title">Projects:
        </div>
        <div class="cv-skills-item">
          @foreach($projects as $project)
                    {{ $project['project_title'] }}
                    {{ $project['project_description'] }}
                    @endforeach
        </div>

      </div>
      <div class="cv-social">
        <a href="" title="Github">
          <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"></path>
          </svg>

        </a>
        <a href="#" title="Codepen">
          <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
            <path d="M12 2l10 6.5v7L12 22 2 15.5v-7L12 2z"></path>
            <path d="M12 22v-6.5"></path>
            <path d="M22 8.5l-10 7-10-7"></path>
            <path d="M2 15.5l10-7 10 7"></path>
            <path d="M12 2v6.5"></path>
          </svg></a> <a href="#" title="Linkedin">
          <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"></path>
            <path d="M2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2"></circle>
          </svg></a>
        <a href="#" title="İnstagram">
          <svg viewBox="0 0 24 24" width="30" height="30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" shape-rendering="geometricPrecision" style="">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
            <path d="M17.5 6.5h.01"></path>
          </svg>
        </a>
        <a href="#" title="Medium">
          <svg fill="currentColor" width="30px" height="30px" viewBox="0 0 15 15">
            <g>
              <path d="M1.79062 2.44688C1.80938 2.2625 1.7375 2.07812 1.6 1.95313L0.190625 0.253125L0.190625 0L4.57188 0L7.95937 7.42812L10.9375 0L15.1156 0L15.1156 0.253125L13.9094 1.40937C13.8062 1.4875 13.7531 1.61875 13.775 1.74687L13.775 10.2469C13.7531 10.375 13.8062 10.5063 13.9094 10.5844L15.0875 11.7406L15.0875 11.9937L9.15938 11.9937L9.15938 11.7406L10.3813 10.5562C10.5 10.4375 10.5 10.4 10.5 10.2188L10.5 3.35L7.10313 11.9719L6.64375 11.9719L2.69375 3.35L2.69375 9.12812C2.65937 9.37187 2.74063 9.61563 2.9125 9.79062L4.5 11.7156L4.5 11.9687L0 11.9687L0 11.7188L1.5875 9.79062C1.75625 9.61563 1.83438 9.36875 1.79062 9.12812L1.79062 2.44688Z"></path>
            </g>
          </svg>
        </a>

      </div>
    </div>

  </div>

</div>

<style>
    @font-face {
  font-family: Product-Sans-Bold-italic;
  src: url(https://unpkg.com/aks-fonts@1.0.0/Product-Sans/Product-Sans-Bold-italic.ttf);
}
@font-face {
  font-family: Product-Sans-Bold;
  src: url(https://unpkg.com/aks-fonts@1.0.0/Product-Sans/Product-Sans-Bold.ttf);
}
@font-face {
  font-family: Product-Sans-Regular;
  src: url(https://unpkg.com/aks-fonts@1.0.0/Product-Sans/Product-Sans-Regular.ttf);
}
@font-face {
  font-family: Product-Sans-italic;
  src: url(https://unpkg.com/aks-fonts@1.0.0/Product-Sans/Product-Sans-italic.ttf);
}

*,
::after,
::before {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
html {
  font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
    "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
    sans-serif;
  font-size: 16px;
  font-weight: normal;
  line-height: 1.5;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  background: #ffdf00;
  color: #666;
}

body {
  font-family: Product-Sans-Regular;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.cv {
  background: white;
  width: 70%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  padding: 30px;
  border-top: 8px solid black;
  position: relative;
  margin-top: 2rem;
  margin-bottom: 2rem;
  overflow: hidden;
  border-radius: 5px;
}
.cv-row {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  width: 100%;
  height: 100%;
  position: relative;
}
.cv-wrap {
  width: 50%;
  margin-right: 1rem;
  display: flex;
  flex-direction: column;
}
.cv-wrap:nth-child(2n) {
  width: 35%;
  margin-right: 0rem;
}
.cv-name {
  font-family: Product-Sans-Bold;
  font-size: 2rem;
  font-weight: 900;
  line-height: normal;
  margin-bottom: 0.5rem;
  color: black;
  width: fit-content;
}
.cv-subname {
  font-family: Product-Sans-Regular;
  font-size: 1.5rem;
  font-weight: 500;
  line-height: normal;
  margin-bottom: 2rem;
  color: #b2b2b2;
  width: fit-content;
}
.cv-content {
}
.cv-content .head-title {
  font-family: Product-Sans-Regular;
  font-size: 1rem;
  font-weight: normal;
  line-height: normal;
  margin-bottom: 0.5rem;
  color: #b2b2b2;
  width: fit-content;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.cv-content-item {
  display: flex;
  flex-direction: column;
  margin-bottom: 1.5rem;
}
.cv-content-item .title {
  font-family: Product-Sans-Bold;
  font-size: 1.3rem;
  font-weight: 900;
  line-height: normal;
  margin-bottom: 0.4rem;
  color: black;
  width: fit-content;
}
.cv-content-item .subtitle {
  font-family: Product-Sans-Regular;
  font-size: 1rem;
  font-weight: 500;
  line-height: normal;
  margin-bottom: 0.2rem;
  color: #555555;
  width: fit-content;
}
.cv-content-item .time {
  font-family: Product-Sans-Regular;
  font-size: 0.9rem;
  font-weight: 500;
  line-height: normal;
  margin-bottom: 0.4rem;
  color: #b2b2b2;
  width: fit-content;
}
.cv-content-item .exprecince {
  font-family: Product-Sans-Regular;
  font-size: 1.1rem;
  font-weight: 500;
  line-height: 1.5;
  color: #131313;
  width: fit-content;
}

.avatar {
  width: 150px;
  height: 150px;
  border-radius: 9999px;
  overflow: hidden;
  position: relative;
  margin-bottom: 2rem;
  box-shadow: 0 5px 30px #00000029;
}
.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  user-select: none;
}
.info {
  display: flex;
  flex-direction: column;
  margin-bottom: 2rem;
}
.info .title {
  font-family: Product-Sans-Regular;
  font-size: 1.3rem;
  font-weight: 200;
  line-height: normal;
  margin-bottom: 0.5rem;
  color: #434343;
  width: fit-content;
}
.info p {
  margin-bottom: 0.3rem;
}
.info a {
  font-family: Product-Sans-Regular;
  font-size: 1.1rem;
  font-weight: 500;
  line-height: normal;
  color: #686868;
  width: fit-content;
  text-decoration: none;
}
.info a:hover {
  color: #004eff;
}
.cv-skills {
  margin-bottom: 0.5rem;
}
.cv-skills .head-title {
  font-family: Product-Sans-Regular;
  font-size: 1.3rem;
  font-weight: 200;
  line-height: normal;
  margin-bottom: 0.5rem;
  color: #434343;
  width: fit-content;
}
.cv-skills .title {
  font-family: Product-Sans-Regular;
  font-size: 1rem;
  font-weight: 200;
  line-height: normal;
  margin-bottom: 0.5rem;
  color: #b9b2b2;
  width: fit-content;
}
.cv-social {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  flex-direction: row;
  position: relative;
  margin-top: 1rem;
}
.cv-social a {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 1rem;
  text-decoration: none;
  color: inherit;
  cursor: pointer;
}
.cv-social a:hover {
  color: #004eff;
}
.cv-social a svg {
  width: 30px;
  overflow: hidden;
}
</style>