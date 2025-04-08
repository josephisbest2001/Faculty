<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Person - Dr. S. HENDRY LEO KANICKAM</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4 text-center text-primary">Resource Person Activities</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Type of Programme</th>
                    <th>Title</th>
                    <th>Beneficiaries</th>
                    <th>Days</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resources_person = [
                    ["Soft skills - Guest Lecture", "Centralized Group Discussion arranged by JASS", "48", "1", "2024-02-13"],
                    ["Association - Seminar", "Seminar on Enterprise Oriented Applications in Cloud Computing", "125", "1", "2024-01-31"],
                    ["Soft skills - Guest Lecture", "Centralized Group Discussion arranged by JASS", "50", "1", "2023-12-21"],
                    ["Certificate Course", "Digital Resilience: Cyber Security for ALL", "40", "45", "2023-11-27"],
                    ["One-day Webinar", "Evolution of Smart Device Programming and its Applications", "30", "1", "2023-09-20"],
                    ["One-day Webinar", "Skill Up with Industry App & Research in Cloud Computing", "60", "1", "2023-09-14"],
                    ["Bridge Course", "Basic Stream for First Year Undergraduate Students", "40", "10", "2023-08-04"],
                    ["One-day Guest Lecture", "Smart Device Programming using Android", "82", "1", "2023-07-17"],
                    ["Workshop", "Three-tier Architecture in Full Stack Web Development", "120", "2", "2023-06-26"],
                    ["Certificate Course", "Data Analysis and Processing", "40", "45", "2022-10-19"],
                    ["Guest Lecture", "Python Programming and Industrial Applications", "100", "1", "2022-08-26"],
                    ["Bridge Course", "Teaching Grammar and Vocabulary to First Year Students", "40", "40", "2022-08-04"],
                    ["Webinar Series", "DBMS at Mar Gregorios College, Chennai", "50", "1", "2021-12-08"],
                    ["Association Lecture", "Web Application Development at AAC, Madurai", "100", "1", "2021-01-12"],
                    ["Guest Lecture", "Mobile Computing at DSASCW, Perambalur", "20", "1", "2020-12-10"],
                    ["Workshop", "Project-Based Learning with Mobile App Dev (SJC)", "120", "3", "2020-11-21"],
                    ["Webinar", "Cloud Computing", "50", "1", "2020-06-06"],
                    ["Special Lecture", "Kerbros Judge + Lecture, JIM, Trichy", "20", "1", "2020-02-07"],
                    ["Guest Lecture", "Smart Device Programming, DSCASW", "80", "1", "2019-07-26"],
                    ["Association Inauguration", "Evolution of Smart Device Programming, AVASC", "120", "1", "2018-07-19"],
                    ["Seminar", "Fundamentals of Android App Dev, Dept. of Electronics", "45", "1", "2016-12-20"],
                    ["Faculty Orientation", "Computer Literacy with Open Office", "25", "1", "2016-12-17"],
                    ["Career Guidance", "Counseling for After HSC Students, OFERR", "75", "1", "2016-04-18"],
                    ["Soft Skills", "Group Discussion and Team Building (JASS)", "90", "7", "2015-01-06"],
                    ["NEEDS - EDI", "Online Marketing and Electronic Payment System", "35", "1", "2014-12-05"],
                    ["Soft Skills", "Group Discussion and Team Building (JASS)", "90", "5", "2014-11-11"],
                    ["NEEDS - EDI", "Cloud Computing in Marketing", "35", "1", "2014-08-13"],
                    ["NEEDS - EDI", "MS-OFFICE 2007", "40", "1", "2014-01-08"]
                ];

                foreach ($resources_person as $index => $r) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td>{$r[0]}</td>
                            <td>{$r[1]}</td>
                            <td>{$r[2]}</td>
                            <td>{$r[3]}</td>
                            <td>{$r[4]}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'footer.php'; ?>
