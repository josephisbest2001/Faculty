<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Profile</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Staff Profile</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="qualification.php">Qualification and Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="patends.php">Patents</a></li>
                <!-- Publications Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Publications
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-white border shadow-lg" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="pap_pre.php">📄 Paper Publication</a></li>
                        <li><a class="dropdown-item text-dark" href="international.php">🌍 International Conference Proceedings Publications</a></li>
                        <li><a class="dropdown-item text-dark" href="book.php">📚 Book Publication/E-Contents/Certificate Course Offered</a></li>
                    </ul>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Conference
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-white border shadow-lg" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="conference.php">📄 Conferences Attended</a></li>
                        <li><a class="dropdown-item text-dark" href="international_conf.php">🌍 International/National Workshops Attended</a></li>
                        <li><a class="dropdown-item text-dark" href="seminar_attended.php">📄 Seminars Attended</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Other Activities
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-white border shadow-lg" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="achievements.php">🏆 Achievements/Positions</a></li>
                        <li><a class="dropdown-item text-dark" href="resource_person.php">👨‍🎓 Resources Person</a></li>
                        <!-- <li><a class="dropdown-item text-dark" href="international_conf.php">🌍 International/National Workshops Attended</a></li>
                        <li><a class="dropdown-item text-dark" href="#">📄 Seminars Attended</a></li>-->
                    </ul>
                </li>

                <!--<li class="nav-item"><a class="nav-link" href="achievements.php">Achievements</a></li>-->
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
