<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff; /* White background */
            font-size: 14px; /* Improved readability */
        }
        
        /* Card Styling */
        .card {
            background-color: #f8f9fa; /* Uniform card color */
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Heading Styling */
        .card-title {
            color: #212529;
            font-size: 18px;
            font-weight: bold;
        }

        .card-text {
            color: #333;
            font-size: 16px;
        }

        .card-text-text-danger{
            font-size: 16px;
            color:  #212529;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h2 class="card-title">Education</h2>
                <div class="card-text">
                    <p><li><strong>Doctor of Philosophy in Computer Science</strong> (2016-2021) - Commended<br>
                    <span class="text-danger">Bishop Heber College, Bharathidasan University, Tiruchirappalli.</span></li></p>

                    <p><li><strong>Master of Philosophy in Computer Science</strong> (2006-2008) - 75.80%<br>
                    <span class="text-success">Bharathidasan University, Tiruchirappalli.</span></li></p>

                    <p><li><strong>Bachelor of Education in Computer Science</strong> (2010-2011) - 71.90%<br>
                    <span class="text-warning">Sri Amman College of Education, Tiruchirappalli.</span></li></p>

                    <p><li><strong>Master of Science in Computer Science</strong> (2004-2006) - 73.79%<br>
                    <span class="text-danger">St. Joseph’s College (Autonomous), Tiruchirappalli.</span></li></p>

                    <p><li><strong>Bachelor of Science in Computer Science</strong> (2001-2004) - 65.49%<br>
                    <span class="text-success">St. Joseph’s College (Autonomous), Tiruchirappalli.</span></li></p>

                    <p><li><strong>Higher Secondary Course (HSC)</strong> (1999-2001) - 70.58%<br>
                    <span class="text-warning">St.Xavier’s Higher Secondary School, Purathakudi, Tiruchirappalli.</span></li></p>

                    <p><li><strong>Secondary School Leaving Certificate (SSLC)</strong> (1998-1999) - 77.20%<br>
                    <span class="text-warning">St.Xavier’s Higher Secondary School, Purathakudi, Tiruchirappalli.</span></li></p>
                </div>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Involvement in other activities</h2>
                <ul class="card-text-text-danger">
                    <li>Soft skills Trainer for UG & PG Students 2008-2024)</li>
                    <li>Information Technology Association President (2011-2012)</li>
                    <li>Examiner of UG Central Valuation in Bharathidasan University</li>
                    <li>Question paper setting for other colleges</li>
                    <li>Class mentor for UG and PG classes</li>
                    <li>Micro Quality Circle member (2014-2019) (IQAC)</li>
                    <li>UG -BCA Programme Coordinator (2019-2024)</li>
                    <li>Chairman for Central Valuation in St.Joseph’s College,Trichy -2</li>
                </ul>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Curriculum Development</h2>
                <ul class="card-text">
                    <li>Java Programming</li>
                    <li>android programming</li>
                </ul>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h2 class="card-title">Experience</h2>
                <p class="card-text">
                    <strong>Head of the Department</strong> (June 2024 – Present)<br>
                    <span class="text-info">Department of Information Technology, St. Joseph’s College, Tiruchirappalli.</span>
                </p>
                <p class="card-text">
                    <strong>Assistant Professor</strong> (11-07-2007 – Present)<br>
                    <span class="text-secondary">Department of Information Technology, St. Joseph’s College, Tiruchirappalli.</span>
                </p>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Research Interests</h2>
                <ul class="card-text">
                    <li>computer networks</li>
                    <li>Cloud computing</li>
                </ul>
            </div>

            <div class="card mb-4">
                <h2 class="card-title">Roles and Responsibilities</h2>
                <ul class="card-text">
                    <li>Possess strong communication and analytical skills and have the ability to extract, interpret and present relevant information.</li>
                    <li>Use of aids to give concrete idea of the concepts to the students.</li>
                    <li>Concentrates on feedback from students.</li>
                    <li>Keeps good relation with the students.</li>
                    <li>Strong interpersonal abilities, with the ability to communicate and work with personnel from a wide verity of professional disciplines and nationalities.</li>
                    <li>Mentoring students for better performance.</li>
                    <li>Creating a healthy class roomenvironment.</li>
                    <li>Providing opportunities to all learners.</li>
                    <li>Planning and execution of all co- curricular activities.</li>
                    <li>Preparing academic planner and syllabus outline.</li>
                    <li>Talent for employing unique teaching strategies.</li>
                    <li>Evaluating student’s performance by conducting regular tests.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

<?php include 'footer.php'; ?>
</body>
</html>






