<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Workshops & Faculty Development Programs Attended</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Workshop Title</th>
                    <th>Organizer</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $workshops = [
                    ["Capacity Building Workshop for Faculty on E-Content Development", "St,Joseph's College (Autonomous), Trichy - 2", "09 June 2015"],

                    ["National Level Workshop on Big Data Analytics and Business Intelligence", "St,Joseph's College (Autonomous), Trichy - 2", "04 January 2016"],

                    ["State Level Workshop on INTEGRATING SPSS WITH AMOS", "Srimad Andavan Arts & Science College(Autonomous), Trichy-05", "12 January 2017"],

                    ["A Two Day Workshop on R Programming for Statistics and Data Mining", "Srimad Andavan Arts & Science College (Autonomous), Trichy-05", "27 April 2017"],

                    ["Endowment Workshop on Current Trends in Computer Science", "St.Joseph`s College, (Autonomous), Trichy-2", "31 August 2017"],

                    ["One day International Workshop on Cloud Computing and Its Practical Demonstration", "Christhuraj Institute of Computer Application and Research, Trichy-12", "28 September 2017"],

                    ["One Day Workshop on Cloud Computing Services", "Srimad Andavan Arts and Science College, Trichy -5", "28 October 2017"],

                    ["Workshop on Internet of Things and its Applications", "St.Joseph`s College, (Autonomous), Trichy-2", "15 December 2017"],

                    ["Prof. S.T.Rajan Endowment Workshop on Current Trends in Computer Science", "St.Joseph`s College, (Autonomous), Trichy-2", "07 September 2018"],

                    ["Prof. S .T Rajan Endowment Workshop on Current Trends in Computer Science(Machine Learning and Analytics)", "St.Joseph`s College, (Autonomous), Trichy-2", "29 November 2019"],

                    ["Three day Faculty Development Programme cum Workshop on Embracing Digital Education", "St.Joseph`s College, (Autonomous), Trichy-2", "15-17 June 2020"],
                    
                    ["Two day National Level Virtual Workshop on Media Research", "Vels Institute of Science, Technology and Advanced Studies, Chennai", "12-13 Feburary 2021"],
                    
                    ["Three day FDP programme Workshop on Embracing Digital Education", "St.Joseph`s College, (Autonomous), Trichy-2", "23-25 June 2021"],

                    ["Workshop on Project Management and R Language", "St.Joseph`s College, (Autonomous), Trichy-2", "26-27 October 2021"],
                    
                    ["Workshop on Predictive Analytics", "St.Joseph`s College, (Autonomous), Trichy-2", "20 December 2021"],
                    
                    ["DST-SERB sponsored Two Day Workshop on Crafting Competitive Grant Proposals", "Dhanalakshmi Srinivasan University, Samayapuram, Trichy", "09-10 September 2022"],
                    
                    ["A Two Day Workshop on Cloud Computing Analytics", "St.Joseph`s College, (Autonomous), Trichy-2", "29-30 September 2022"],
                    
                    ["A Two Day Workshop on R language", "St.Joseph`s College, (Autonomous), Trichy-2", "19 October 2022"],

                    ["Prof.S.T.Rajan Endowment Workshop on REACT JS", "St.Joseph`s College, (Autonomous), Trichy-2", "24 Feburary 2023"],
                    
                    ["Two Day Workshop on Cloud Analytics and Hadoop", "St.Joseph`s College, (Autonomous), Trichy-2", "27-28 July 2023"],
                    
                    ["Prof S.T.Rajan Endowment Workshop on Mastering AWS Cloud", "St.Joseph`s College, (Autonomous), Trichy-2", "13 Feburary 2024"]
                ];

                foreach ($workshops as $index => $workshop) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td><strong>{$workshop[0]}</strong></td>
                            <td><strong>{$workshop[1]}</strong></td>
                            <td><strong>{$workshop[2]}</strong></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
