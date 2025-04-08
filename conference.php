<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/style.css">

<style>
    /* Table Styling */
    
    
    .styled-table {
        border-collapse: collapse;
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    /* Table Header */
    .styled-table thead {
        position: sticky;
        top: 0;
        background-color: #0056b3; /* Dark Blue */
        color: white;
        z-index: 10;
    }
    .styled-table th, .styled-table td {
        padding: 12px;
        text-align: left;
    }
    /* Row Colors */
    .styled-table tbody tr:nth-child(even) {
        background-color: #e3f2fd; /* Light Blue */
    }
    .styled-table tbody tr:nth-child(odd) {
        background-color: #f8f9fa; /* Light Grey */
    }
    .styled-table tbody tr:hover {
        background-color: #d0ebff; /* Hover Effect */
        transition: 0.3s;
    }
    /* Uniform Text Color */
    .conference-text {
        color: #007bff; /* Royal Blue */
        font-weight: bold;
    }
</style>

</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary">🎓 Conferences Attended</h2>

        <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Conference Title</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $conferences = [
                            ["title" => "International Conference on Computational Intelligence & Information Technology - ICCIIT-2012", 
                            "location" => "Info Institute of Engineering, Coimbatore", 
                            "date" => "02 March 2012"],

                            ["title" => "Paper Presented in International Conference on Emerging Trends in Engineering & Technology", 
                            "location" => "Arunachala College of Engineering for Women, Vellichanthai, Kanyakumari", 
                            "date" => "09 December 2016"],

                            ["title" => "International Conference on Recent Trends in Computing Technology", 
                            "location" => "Bharath University, Chennai ", 
                            "date" => "21 April 2017"],

                            ["title" => "Paper Presented In A Two Day National Conference On Transforming Technology", 
                            "location" => "Srimad Andavan Arts and Science College, Trichy", 
                            "date" => "24 January 2018"],

                            ["title" => "National conference on India in 2020: A Prospective - Vision for Progressive Future", 
                            "location" => "St.Joseph's College, Trichy", 
                            "date" => "24 January 2020"],

                            ["title" => "International Virtual Conference on Contemporary Developments in Computer Science, Artificial Intelligence, Data Science", 
                            "location" => "SRM Trichy Arts and Science College, Trichy", 
                            "date" => "05 March 2021"],

                            ["title" => "International Conference on Computing Technologies & Mathematical Sciences 2020", 
                            "location" => "Annai Violet Arts and Science College, Chennai", 
                            "date" => "20-21 November 2021"],

                            ["title" => "Natural Conference on Innovative Research Methodology cum Research Meet", 
                            "location" => "Sri Sangara Bhagavathi Arts and Science College, Puducherry", 
                            "date" => "29 January 2022"],

                            ["title" => "National Conference on Natural Language Processing and Computation", 
                            "location" => "Dhanalakshmi Srinivasan Arts and Science for Women, Perambalur", 
                            "date" => "2-4 January 2012"],

                            ["title" => "International Conference on The Impact of Disruptive Technologies", 
                            "location" => "St.Joseph's College, Trichy", 
                            "date" => "08-09 January 2024"]
                        ];

                        $i = 1;
                        foreach ($conferences as $conf) {
                            echo "
                                <tr>
                                    <td class='conference-text'>{$i}</td>
                                    <td class='conference-text'>{$conf['title']}</td>
                                    <td class='conference-text'>{$conf['location']}</td>
                                    <td class='conference-text'>{$conf['date']}</td>
                                </tr>";
                            $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
