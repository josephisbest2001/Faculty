<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Seminars Attended</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Organization Name</th>
                    <th>Place</th>
                    <th>Days</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $seminars = [
                    ["Role of Data Mining in Bioinformatics",  "Department of Computer Applications", "Bishop Heber College, Trichy", 1, "2011-01-07"],
                    ["Changing Scenario in Higher Education", "Internal Quality Assurance Cell", "St. Joseph’s College, Trichy", 1, "2011-09-14"],
                    ["Animation and its Applications", "Department of Computer Applications", "Bishop Heber College, Trichy", 1, "2012-02-17"],
                    ["Wireless Sensor Networks", "Department of Computer Applications", "Bishop Heber College, Trichy", 1, "2013-01-04"],
                    ["Cloud Computing",  "Department of Computer Applications", "Bishop Heber College, Trichy", 1, "2013-01-10"],
                    ["Big Data and Cloud Computing",  "Department of Computer Applications", "Bishop Heber College, Trichy", 1, "2014-01-23"],
                    ["Application of Data Mining in Knowledge Management",  "Department of Computer Science", "Srimad Andavan Arts and Science College, Trichy", 1, "2014-01-24"],
                    ["E-Content Development and Digital Tools in Teaching",  "IQAC and Department of Computer Science", "St. Joseph’s College, Trichy", 1, "2022-05-23"],
                    ["Current Trends in Computer Science",  "PG & Research Department of Computer Science", "Bishop Heber College, Trichy", 1, "2022-05-24"]
                ];

                foreach ($seminars as $index => $seminar) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td>{$seminar[0]}</td>
                            <td>{$seminar[1]}</td>
                            <td>{$seminar[2]}</td>
                            <td>{$seminar[3]}</td>
                            <td>{$seminar[4]}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
