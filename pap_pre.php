<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Publications - Dr. I. Carol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1300px;
            margin-top: 50px;
        }
        .card {
            border-left: 5px solid #007bff;
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card:hover {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }
        .card-body {
            padding: 15px;
        }
        .journal-title {
            font-style: italic;
            color: #555;
        }
        .search-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Journal Publications</h2>

    <!-- Search Options -->
    <div class="row search-container">
        <div class="col-md-6">
            <input type="text" id="searchTitle" class="form-control" placeholder="Search by Title or Publication...">
        </div>
        <div class="col-md-4">
            <select id="searchYear" class="form-select">
                <option value="">Search by Year</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-secondary w-100" onclick="clearFilters()">Clear</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="publicationsContainer">

            <?php 
           $publications = [
            ["Dr. S. HENDRY LEO KANICKAM", "ANALYSIS OF CLOUD AUTHENTICATIONS AND DATA SECURITY USING PHECC", "Journal of Information and Computational Science (Scopus), Volume No. : 10 PP. : 35-40 ISSNO. : 1548 - 7741 Impact Factor : -, H Index No. : 0, C Index No. : 0, Year: 2020"],

            ["Dr. S. HENDRY LEO KANICKAM", "Enhanced Authentication Mechanism to Protect Unauthorized Access in Public Cloud Environment", "Mukt Shabd Journal, Volume No. : 9, PP. : 414-421, ISSNO. : 2347-3150, Impact Factor : 4.6, H Index No. : 0, C Index No. : 0, Year: 2020"],

            ["Dr. S. HENDRY LEO KANICKAM", "Enhanced Data Security Technique to Protect User's Data in the Public Cloud Environment", "Journal of Shanghai Jiaotong University, Volume No. : 16, PP. : 501-514, ISSNO. : 1007-1172, Impact Factor : 6.2, H Index No. : 0, C Index No. : 0, Year: 2020"],

            ["Dr. S. HENDRY LEO KANICKAM", "User Credential-Based Authentication Mechanism for Securing Data Access in Public Cloud Environment", "ARPN Journal of Engineering and Applied Sciences (Scopus), Volume No. : 15, PP. : 3085-3089, ISSNO. : 1819-6608, Impact Factor : 0.238, H Index No. : 0, C Index No. : 0, Year: 2020"],

            ["Dr. S. HENDRY LEO KANICKAM", "BIG DATA SKEW RECOMMENDER SYSTEM FOR WEB LOG DESIGN ANALYTICS", "Journal of Emerging Technologies and Innovative Research, Volume No. : 6, PP. : 438-441, ISSNO. : 2349-5162, Impact Factor : 5.87, H Index No. : 0, C Index No. : 0, Year: 2019"],

            ["Dr. S. HENDRY LEO KANICKAM", "Enhancing The Recent Security Of LTE Against Attacks", "Journal of Emerging Technologies and Innovative Research, Volume No. : 6, PP. : 718-722, ISSNO. : 2349-5162, Impact Factor : 5.87, H Index No. : 0, C Index No. : 0, Year: 2019"],

            ["Dr. S. HENDRY LEO KANICKAM", "Analysis of IoT Design and Technology", "Journal of Emerging Technologies and Innovative Research, Volume No. : 6, PP. : 472-479, ISSNO. : 2349-5162, Impact Factor : 5.87, H Index No. : 0, C Index No. : 0, Year: 2019"],

            ["Dr. S. HENDRY LEO KANICKAM", "A REVIEW ON ISSUES AND TECHNOLOGIES IN BIG DATA", "Journal of Emerging Technologies and Innovative Research, Volume No. : 6, PP. : 521-524, ISSNO. : 2349-5162, Impact Factor : 5.87, H Index No. : 0, C Index No. : 0, Year: 2019"],
            
            ["Dr. S. HENDRY LEO KANICKAM", "Comparative Analysis of Hash Authentication Algorithms and ECC Based Security Algorithms in Cloud Data", "Asian Journal of Computer Science and Technology, Volume No. : 8, PP. : 53-61, ISSNO. : 2249-0701, Impact Factor : -, H Index No. : 0, C Index No. : 0, Year: 2019"],

            ["Dr. S. HENDRY LEO KANICKAM", "A SURVEY PAPER ON CLOUD AUTHENTICATION ISSUES", "Journal of Emerging Technologies and Innovative Research (JETIR), Volume No. : 6, PP. : 485-488, ISSNO. : 2349-5162, Impact Factor : 5.87, H Index No. : 0, C Index No. : 0, Year: 2019"],

            ["Dr. S. HENDRY LEO KANICKAM", "AN OVERVIEW OF DATA INTENSIVE COMPUTING", "Journal of Emerging Technologies and Innovative Research (JETIR), Volume No. : 6, PP. : 489-493, ISSNO. : 2349-5162, Impact Factor : 5.87, H Index No. : 0, C Index No. : 0, Year: 2019"],

            ["Dr. S. HENDRY LEO KANICKAM", "A Survey on Layer wise Issues and Challenges in Cloud Security", "Institute of Electrical and Electronics Engineer(IEEE Xplore) (Scopus), Volume No. : -, PP. : 168-171, ISSNO. : 978-1-5090-5573-9, Impact Factor : -, H Index No. : 1, C Index No. : 1, Year: 2016"],
            
            ["Dr. S. HENDRY LEO KANICKAM", "An Improved Data Protection Technique to Secure a Public Cloud Environment", "Indian Journal of Computer Science and Engineering (IJCSE) (Scopus), Volume No. : 11, PP. : 772-785, ISSNO. : 0976-5166, Impact Factor : 0, H Index No. : 0, C Index No. : 0, Year: 2020"]
        ];

            foreach ($publications as $pub) {
                // Extracting year from the last element (publication details)
                preg_match('/\b(19|20)\d{2}\b/', $pub[2], $yearMatch);
                $year = $yearMatch[0] ?? "Unknown";

                echo '<div class="card mb-3 publication-card" data-year="'.$year.'">
                        <div class="card-body">
                            <h6 class="card-title"><strong>'.$pub[0].'</strong></h6>
                            <p class="card-text">"'.$pub[1].'"</p>
                            <p class="journal-title">'.$pub[2].'</p>
                        </div>
                      </div>';
            }
            ?>

        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        populateYearFilter();
        document.getElementById("searchTitle").addEventListener("input", filterPublications);
        document.getElementById("searchYear").addEventListener("change", filterPublications);
    });

    function populateYearFilter() {
        let years = [...new Set([...document.querySelectorAll('.publication-card')].map(card => card.dataset.year))];
        years.sort((a, b) => b - a);  // Sorting in descending order

        let yearSelect = document.getElementById("searchYear");
        years.forEach(year => {
            let option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        });
    }

    function filterPublications() {
        let searchText = document.getElementById("searchTitle").value.toLowerCase();
        let selectedYear = document.getElementById("searchYear").value;
        let cards = document.querySelectorAll(".publication-card");

        cards.forEach(card => {
            let title = card.querySelector(".card-text").textContent.toLowerCase();
            let year = card.dataset.year;

            let matchesTitle = title.includes(searchText);
            let matchesYear = selectedYear === "" || year === selectedYear;

            if (matchesTitle && matchesYear) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    function clearFilters() {
        document.getElementById("searchTitle").value = "";
        document.getElementById("searchYear").value = "";
        filterPublications();
    }
</script>

</body>
</html>

<?php include 'footer.php'; ?>
