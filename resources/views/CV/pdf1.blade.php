<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.2/jspdf.min.js" integrity="sha256-7yY4x9Gb1vqsx0jySxkg5lw+QnCz9Gt7Oio5I/lSj2M=" crossorigin="anonymous"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
  <title>Resume</title>
</head>
<body>
  <div id="main-container">
    <div class="page" id="toPrint">

        <h1 class="name" style="background-color: #53555b;color:#fff; font-size:50px; ">{{$personal_information['profile_title']}} {{$personal_information['first_name']}} {{$personal_information['last_name']}} <br /></h1>
        
<img src="assets/images/{{ $personal_information['image_path'] }}" class="name" style="width:20%; float:right;">
      <section class="contents">
        <section class="main-section">
          Phone Number: {{$contact_information['phone_number']}} <br /> Email:{{$contact_information['email']}}
          <section class="experience">
            <div class="section-title">About Me</div>
            {{ $personal_information['about_me']}}
          </section>
          <section class="experience">
            <div class="section-title">Experience</div>
            @foreach($experience as $experience)
            <div class="experience-card">
              <div class="title">{{$experience['job_title']}}</div>
              <div class="company">
                <span class="name">{{$experience['organization']}}</span>
                <span class="duration">{{$experience['job_start_date']}}{{$experience['job_end_date']}}</span>
              </div>
              <div>
                <ul class='experience-list'>
                  <li>{{$experience['job_description']}}</li>
                </ul>
              </div>
            </div>
            @endforeach
          </section>
          <section class="certificates">
            <div class="section-title">Certificates</div>
            @foreach($projects as $projects)
            <div class="certificate-card">
              <div class="title">{{$projects['project_title']}}</div>
              <div class="date">{{$projects['project_description']}}</div>
            </div>
            @endforeach
          </section>
          <section class="education">
            <div class="section-title">Education</div>
            @foreach($education as $education)
            <div class="education-card">
              <div class="institution">{{$education['institute']}} - {{$education['edu_start_date']}} - {{$education['edu_end_date']}}</div>
              <div class="title">{{$education['degree_title']}}</div>
              <div class="date">{{$education['education_description']}}</div>
            </div>
            @endforeach
          </section>
        </section>
          <section class="main-section">
          <section class="experience">
            <div class="section-title">Skills</div>
            <div class="experience-card">
              @foreach ($skills as $skills)
                        <div class="company">
                <span class="name">{{$skills['skill_name']}}</span>
              </div>
              @endforeach
        
            </div>

           
          </section>
          <section class="certificates">
            <div class="section-title">Certificates</div>
            @foreach($interests as $interest)
            <div class="certificate-card">
              <div class="title">{{$interest['interest']}}</div>
            </div>
            @endforeach
          </section>
          <section>
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
          </section>

        </section>
      </section>
    </div>
  </div>
  <script>
    window.html2canvas = html2canvas;
    const btnGenerate = document.getElementById("cmd");
    const source = window.document.getElementById("toPrint");

    function generatePdf() {
      const pdf = new jsPDF('p', 'pt', [595, 842]);
      const printSource = source.cloneNode(true);
      const lists = printSource.getElementsByClassName('experience-list');

      for(const list of lists) {
        list.style.marginLeft = '10px';
      }

      pdf.html(printSource, {
        html2canvas: {
            scale: 0.75,
        },
        callback: function (pdf) {
          pdf.save('resume.pdf');
        }
      });
    }

    btnGenerate.addEventListener('click', generatePdf);

  </script>
</body>
</html>

<style>
  html, body, * {
  box-sizing: border-box;
  color: #53555b;
  margin: 0;
  padding: 0;
}

button {
  cursor: pointer;
  height: 50px;
  position: absolute;
  right: 0;
  top: 0;
  width: 150px;
}

#main-container {
  background-image: url(./assets/img//background.jpg);
  background-size: cover;
  display: flex;
  font-weight: 400;
  justify-content: center;
  margin: 0;
  padding-bottom: 10px;
  width: 100%;
}

.page {
  box-sizing: border-box;
  height: 29.684cm;
  margin: 0;
  padding: 0;
  width: 21.1cm;
}

.page > * {
  margin: 0;
}

header {
  background-color: rgb(49, 63, 78);
  height: 9%;
  padding: 12px 20px;
}

header .name, header .major {
  color: white;
  font-family: Helvetica, sans-serif;
  font-weight: 400;
  margin: 0;
}

header .major {
  font-weight: 100;
  margin-top: 10px;
}

.contents {
  box-sizing: border-box;
  display: flex;
  height: 91%;
  width: 100%;
}

.main-section {
  background-color: white;
  display: inline-block;
  width: 70%;
}

.main-section > section,
.right-section > section {
  padding: 20px;
}

.highlights {
  font-family: Helvetica, sans-serif;
  font-size: small;
  font-weight: 100;
  text-align: left;
  word-spacing: normal;
  font-variant: normal;
}

li {
  font-variant: normal;
  font-weight: 100;
}

.section-title {
  border-bottom: 1px solid #bdbdbd;
  color: rgb(49, 63, 78);
  font-family: Tahoma, sans-serif;
  font-size: 18px;
  font-weight: 400;
}

.right-section {
  background-color: #f5f5f5;
  display: inline-block;
  width: 30%;
}

.experience-card {
  font-family: Helvetica, sans-serif;
  padding: 10px 0;
}

.experience-card .title {
  color: #53555b;
  font-family: Helvetica, sans-serif;
  font-size: 17px;
}

.experience-card .company {
  font-family: Helvetica, sans-serif;
  font-size: 15px;
  margin-bottom: 10px;
}

.experience-card .company .name{
  color: #919191;
  font-weight: bold;
}

.experience-card .company .duration{
  color: #919191;
  font-size: 14px;
}

ul {
  font-family: Helvetica, sans-serif;
  font-size: small;
  list-style: disc;
  list-style-position: inside;
}

.certificate-card {
  color: #53555b;
  font-family: Helvetica, sans-serif;
  margin: 8px 0;
}

.date {
  color: #919191;
  font-size: small;
}

.education-card {
  color: #53555b;
  font-family: Helvetica, sans-serif;
  margin: 8px 0;
}

.education-card .institution{
  font-size: small;
}

.info-item {
  color: #53555b;
  font-family: Helvetica, sans-serif;
  font-size: small;
  margin-top: 10px;
}

.info-item .info {
  display: block;
  font-weight: 100;
  margin-top: 6px;
}

.skill-card {
  display: flex;
  font-family: Helvetica, sans-serif;
  font-size: small;
  justify-content: space-between;
  padding: 20px 0;
}

.skill-level-container {
  display: flex;
}

.disc {
  background-color: #c2c2c2;
  border-radius: 50%;
  display: inline-block;
  height: 12px;
  margin-right: 2px;
  width: 12px;
  position: relative;
}

.fill {
  background-color: rgb(49, 63, 78);
}

.half-disc-left{
  height:12px;
  width:6px;
  border-radius: 90px 0 0 90px;
  background:rgb(49, 63, 78);
}

.concentric-half {
  background-color: rgb(49, 63, 78);
  height: 6px;
  width: 6px;
  position: absolute;
  top: 25%;
  left: 25%;
}
</style>