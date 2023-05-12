<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CV</title>
    <style>
        /* Define your CSS styles here */
        body {
            font-size: 12px;
            line-height: 1.5;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0 0 10px;
        }

        h2 {
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0 10px;
        }

        h3 {
            font-size: 14px;
            font-weight: bold;
            margin: 20px 0 10px;
        }

        p {
            margin: 0 0 10px;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        li {
            margin: 0 0 10px;
        }

        .section {
            margin: 20px 0;
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
            margin-top: 20px;
        }

        .contact-info p {
            margin: 0;
        }

        .contact-info ul {
            margin-left: 20px;
        }

        .contact-info li {
            margin: 0;
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
</html>