<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume PDF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            color: #4CAF50;
            text-align: center;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 28px;
            margin-top: 30px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .contact-info {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .contact-info p {
            font-weight: bold;
            color: #333;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .skills-list li {
            display: inline-block;
            background-color: #f1f1f1;
            padding: 8px 16px;
            margin: 5px;
            border-radius: 20px;
            font-weight: bold;
        }

        .download-btn {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 30px auto;
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 25px;
            font-size: 18px;
            text-decoration: none;
        }

        .download-btn:hover {
            background-color: #45a049;
            cursor: pointer;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 40px;
            color: #333;
        }

        .header p {
            font-size: 18px;
            color: #777;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .contact-info {
                flex-direction: column;
                align-items: center;
            }

            .contact-info p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Personal Info Section -->
    @foreach($personal_info as $info)
    <div class="container">
        <div class="header">
            <h1>{{ $info->name }}</h1>
            <p>{{ $info->email }} | {{ $info->phone }}</p>
        </div>
        <div class="contact-info">
            <p>Address: {{ $info->address }}</p>
            <p>Profile Summary: {{ $info->profile_summary }}</p>
        </div>
    </div>
    @endforeach

    <!-- Work Experience Section -->
    <div class="container">
        <h2>Work Experience</h2>
        <ul>
            @foreach ($work_experiences as $experience)
                <li><strong>{{ $experience->company }} - {{ $experience->job_title }}</strong></li>
                <li>{{ $experience->start_date }} - {{ $experience->end_date }}</li>
                <li>{{ $experience->description }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Education Section -->
    <div class="container">
        <h2>Education</h2>
        <ul>
            @foreach ($education as $edu)
                <li><strong>{{ $edu->degree }} from {{ $edu->institution }}</strong></li>
                <li>{{ $edu->start_date }} - {{ $edu->end_date }}</li>
                <li>{{ $edu->description }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Skills Section -->
    <div class="container">
        <h2>Skills</h2>
        <ul class="skills-list">
            @foreach ($skills as $skill)
                <li>{{ $skill->skills_name }} - {{ $skill->profiency_level }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Projects Section -->
    <div class="container">
        <h2>Projects</h2>
        <ul>
            @foreach ($projects as $project)
                <li><strong>{{ $project->project_title }} - {{ $project->description }}</strong></li>

            @endforeach
        </ul>
    </div>

    <!-- Hobbies Section -->
    <div class="container">
        <h2>Hobbies</h2>
        <ul>
            @foreach ($hobbies as $hobby)
                <li>{{ $hobby->hobbies_name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Download Button -->
    <div class="container">
        <a href="{{ url('download_pdf') }}" class="download-btn">Download CV</a>
    </div>

</body>
</html>

