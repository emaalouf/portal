<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV Using HTML & CSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<div id="page">

    <div class="photo-and-name">
        <div class="contact-info-box">
            <h1 class="name">{{$personal_information['first_name']}}</h1>
            <br>
            <h3 class="job-title">{{$personal_information['profile_title']}}</h3>


            <p class="contact-details">Phone: {{ $contact_information['phone_number']}} &nbsp; - &nbsp; Email: {{ $contact_information['email']}}</p>
            <p class="contact-details">Github: {{ $contact_information['github_link']}} &nbsp; - &nbsp; LinkedIn: {{ $contact_information['linkedin_link']}}</p>

        </div>
    </div>
    <div id="objective">
        <h3>Objective</h3>
        <p>
            {{$personal_information['about_me']}}
        </p>
    </div>
    <div id="education">
        <h3>Education</h3>
         @foreach($education as $education)
        <table>
            <tr class="school-1">
                <td rowspan="2">{{ $education['edu_start_date']}} - {{$education['edu_end_date']}}</td>
                <td><b>{{ $education['institute'] }}</b>{{ $education['degree_title']}}</td>
            </tr>
          @endforeach
        </table>
    </div>
    <div id="work">
        <h3>Experience</h3>
        <table>
          @foreach($experience as $experience)
            <tr class="work-1">
                <td>{{ $experience['job_start_date']}} - {{ $experience['job_end_date']}}</td>
                <td><b>{{ $experience['organization']}}</b>:{{ $experience['job_description']}}</td>
            </tr>
          @endforeach
        </table>
    </div>
    <div id="bio-data">
        <h3>Skill</h3>
        <table>
          @foreach($skills as $skill)
            <tr>
                <td>Name:{{ $skill['skill_name']}}</td>
                <td><b>Percentage:{{ $skill['skill_percentage']}}</b></td>
            </tr>
            @endforeach
        </table>
         <h3>Languages</h3>
        <table>
          @foreach($languages as $languages) 
            <tr>
                <td>Name:{{ $languages['language']}}</td>
                <td><b>Percentage:{{ $languages['language_level']}}</b></td>
            </tr>
            @endforeach
        </table>

        <h3>Interests</h3>
        <table>
          @foreach($interests as $interests) 
            <tr>
                <td>Name:{{ $interests['interest']}}</td>
            </tr>
            @endforeach
        </table>
        
        
    </div>
</div>

</body>
</html>

<style>
  * {margin: 0;padding: 0;}

body{font-family: 'Montserrat', sans-serif;}

#page {
    min-height: 200px;
    width: 60%;
    min-width: 600px;
    background: whitesmoke;
    margin: 50px auto;
    padding: 30px;
    color: #27aae1;
}

.photo-and-name {
    /* NO STYLE NEEDED YET */
}

.photo {
    width: 15%;
    min-width: 130px;
    float: left;
    margin-right: 20px;
}

.contact-info-box {
    width: 70.9%;
    display: inline-block;
}

.name {
    margin-bottom: -5px;
}
.job-title {
    display: inline-block;
}

.contact-details {
    background: #27aae1;
    color: white;
    text-align: center;
    margin: auto;
    margin-top: 25px;
    padding: 5px;
    font-size: 15px;
}

#objective {
    
}

#objective h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#objective p {
    padding: 0 5px;
    line-height: 25px;
    font-size: 14px;
    color: #000;
}

#education h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#education table td {
    padding: 5px;
    font-size: 14px;
    color: #000;
}

#education table tr.school-1 td:first-child {
    width: 120px;
    color: gray;
    padding-bottom: 25px;
}

#education table tr.school-2 td:first-child {
    padding-bottom: 25px;
}

#work h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#work table td {
    padding: 5px;
    font-size: 14px;
    color: #000;
}

#work table tr.work-1 td:first-child {
    width: 120px;
    color: gray;
    padding-bottom: 25px;
}

#work table tr.work-1 td {
    padding-bottom: 25px;
}

#work table tr.work-2 td:first-child {
    width: 120px;
    color: gray;
}

#bio-data h3 {
    border: 1px solid #d3d3d3;
    text-transform: uppercase;
    padding: 5px;
    border-radius: 5px;
    margin: 30px 0 10px;
}

#bio-data table td {
    padding: 8px;
    font-size: 15px;
    color: #000;
}

#bio-data table tr td:first-child {
    width: 200px;
}

#bio-data table tr td:nth-child(2) {
    width: 300px;
}
</style>