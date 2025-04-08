<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books by Dr. I. Carol</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .book-card {
            background-color: #f8f1e4; /* Light Beige */
            border: 1px solid #d2b48c; /* Soft Brown Border */
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .book-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            color:rgb(173, 224, 125); /* Dark Brown Title */
            font-weight: bold;
        }
        .card-text {
            color:rgb(146, 63, 118); /* Deep Brown for better contrast */
        }
    </style>
</head>
<body>

<!--

<div class="container">
    <h2 class="text-center mb-4 text-dark">📚 Books by Dr. S. HENDRY LEO KANICKAM</h2>
    
    <div class="row">
        <?php 
        $books = [
            ["title" => "Advanced Cloud Security", "publisher" => "Inam Pathippagam", "isbn" => "97893-95137-492", "year" => "2023"],
            /*["title" => "IoT and Robotics: Foundations of Automation", "publisher" => "Leilani Katie Publications and Press", "isbn" => "978-93-6348-432-0", "year" => "2025"],
            /*["title" => "Android Programming: An Absolute Beginner’s Guide", "publisher" => "Self Publications, Kerala", "isbn" => "978-93-5 891-16", "year" => "2023"]*/
        ];

        foreach ($books as $book) {
            echo '<div class="col-md-4">
                    <div class="card book-card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">' . $book['title'] . '</h5>
                            <p class="card-text"><strong>📖 Publisher:</strong> ' . $book['publisher'] . '</p>
                            <p class="card-text"><strong>📘 ISBN:</strong> ' . $book['isbn'] . '</p>
                            <p class="card-text"><strong>📅 Year:</strong> ' . $book['year'] . '</p>
                        </div>
                    </div>
                  </div>';
        }
        ?>
    </div>
</div>

    -->

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">📚 Books by Dr. S. HENDRY LEO KANICKAM</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title of the Book</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $books_published = [
                    ["Advanced Cloud Security", "Inam Pathippagam", "97893-95137-492", "2023"]
                ];

                foreach ($books_published as $index => $books_publish) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td><strong>{$books_publish[0]}</strong></td>
                            <td><strong>{$books_publish[1]}</strong></td>
                            <td><strong>{$books_publish[2]}</strong></td>
                            <td><strong>{$books_publish[3]}</strong></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">E-Contents</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Year</th>
                    <th>PPT</th>
                    <th>Video</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $econtents = [
                    ["2023", "5", "1", "3"],

                    ["2022", "6", "2", "3"]
                ];

                foreach ($econtents as $index => $econtent) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td><strong>{$econtent[0]}</strong></td>
                            <td><strong>{$econtent[1]}</strong></td>
                            <td><strong>{$econtent[2]}</strong></td>
                            <td><strong>{$econtent[3]}</strong></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">JOSTEL E-Contents</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nature of the Course</th>
                    <th>Title of the course</th>
                    <th>Duration of e-content</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $jostel_econtents = [
                    ["Self Paced", "Cloud Computing", "00:35"],
                ];

                foreach ($jostel_econtents as $index => $jostel_econtent) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td><strong>{$jostel_econtent[0]}</strong></td>
                            <td><strong>{$jostel_econtent[1]}</strong></td>
                            <td><strong>{$jostel_econtent[2]}</strong></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Certificate Course Offered</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Course Name</th>
                    <th>Hours & Credits</th>
                    <th>Position</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $certificate_econtents = [
                    ["Data Analysis and Processing", "45 Hours & 3 Credits", "Course Coordinator", "2022-2023"],

                    ["Digital Resilience Cyber Security for All", "45 Hours & 3 Credits", "Course Coordinator", "2023-2024"]
                ];

                foreach ($certificate_econtents as $index => $econtent) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td><strong>{$econtent[0]}</strong></td>
                            <td><strong>{$econtent[1]}</strong></td>
                            <td><strong>{$econtent[2]}</strong></td>
                            <td><strong>{$econtent[3]}</strong></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'footer.php'; ?>
