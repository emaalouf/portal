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
    <h1>{{ $personal_information['first_name'] }} {{ $personal_information['last_name'] }}</h1>
    <p>{{ $personal_information['profile_title'] }}</p>

    <div class="contact-info section">
        <h2>Contact Information</h2>
        <div class="section-content">
            <ul>
                <li>{{ $contact_information['address'] }}</li>
                <li>{{ $contact_information['phone'] }}</li>
                <li>{{ $contact_information['email'] }}</li>
                <li>{{ $contact_information['website'] }}</li>
            </ul>
        </div>
    </div>

    <div class="education section">
        <h2>Education</h2>
        <div class="section-content">
            @foreach($education as $edu)
                <h3>{{ $edu['degree'] }}, {{ $edu['major'] }}</h3>
                <p>{{ $edu['school'] }}, {{ $edu['location'] }}</p>
                <p>{{ $edu['start_date'] }} - {{ $edu['end_date'] }}</p>
            @endforeach
        </div>
    </div>

    <div class="experience section">
        <h2>Experience</h2>
        <div class="section-content">
            @foreach($experience as $exp)
                <h3>{{ $exp['job_title'] }}</h3>
                <p>{{ $exp['employer'] }}, {{ $exp['location'] }}</p>
                <p>{{ $exp['start_date'] }} - {{ $exp['end_date'] }}</p>
               
<p>{{ $exp['description'] }}</p>
            @endforeach
        </div>
    </div>
    <div class="skills section">
    <h2>Skills</h2>
    <div class="section-content">
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill['skill'] }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="languages section">
    <h2>Languages</h2>
    <div class="section-content">
        <ul>
            @foreach($languages as $lang)
                <li>{{ $lang['language'] }} ({{ $lang['proficiency'] }})</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="projects section">
    <h2>Projects</h2>
    <div class="section-content">
        @foreach($projects as $proj)
            <h3>{{ $proj['title'] }}</h3>
            <p>{{ $proj['description'] }}</p>
            <p><em>{{ $proj['link'] }}</em></p>
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