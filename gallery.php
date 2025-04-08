<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Achievements & Events</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .gallery-container {
            padding: 40px 0;
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }


        .gallery-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .image-caption {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }

        .youtube-section iframe {
            width: 100%;
            height: 400px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        /* Modal Styles */
        .modal-content {
            background-color: #fff;
            border-radius: 12px;
        }

        .modal-body img {
            width: 100%;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>
    <?php include 'navbar.php'; ?>

    <div class="container gallery-container">
        <h2 class="text-center mb-4">Gallery - Achievements & Events</h2>

        <div class="row g-4">
            <?php
            $images = [
                ["assets/event1.jpeg", "Staffs - Career Counselling & Upskilling for Industry"],
                ["assets/event2.jpeg", "Association Valedictory Fuction - Department of Information Technology"],
                ["assets/event3.jpeg", "Students Meetings - Human Values and Professional Ethics"],
               
            ];

            foreach ($images as $index => $img) {
                echo "<div class='col-md-4'>
                        <div class='gallery-item' data-bs-toggle='modal' data-bs-target='#imageModal{$index}'>
                            <img src='{$img[0]}' alt='Image'>
                            <p class='image-caption'>{$img[1]}</p>
                        </div>

                        <!-- Modal Structure -->
                        <div class='modal fade' id='imageModal{$index}' tabindex='-1' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title'>{$img[1]}</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <img src='{$img[0]}' alt='Image'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
            }
            ?>
        </div>

       
    </div>

<div class="container my-5">
    <h3 class="text-center">Magazine-IT</h3>&nbsp;
    <div class="text-center">
        <iframe src="assets/sample.pdf" style="width: 100%; height: 600px; border: 1px solid #ddd; overflow-y: scroll;"></iframe>
        <p class="mt-3">
            <a href="assets/sample.pdf" class="btn btn-primary" download>Download PDF</a>
        </p>
    </div>
</div>




    <?php include 'footer.php'; ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
