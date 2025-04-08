<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
 <!-- Custom CSS -->
 <link rel="stylesheet" href="assets/style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 <style>

.profile-img {
    width: 260px;
    height: 260px;
    border-radius: 50%;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
   
    object-position: center; /* Centers the image within the circle */
    background-color: #fff; /* Adds a background to fill empty space */
    transition: transform 0.3s ease-in-out;
}

.profile-img:hover {
    transform: scale(1.05); /* Optional hover effect */
}

</style>
<!-- About Section -->
<div class="container about-section">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="assets/DrSHK1.jpg" class="profile-img" alt="Profile Image">
        </div>
        <div class="col-md-8 about-content">
            <h2>About Me</h2>
            <p>I am a dedicated Assistant Professor and Head of the Department of Information Technology with over a decade of experience. My areas of expertise include Web Mining, Data Mining, Machine Learning, Big Data Analytics, and Cloud Computing. I am passionate about designing innovative frameworks and algorithms that enhance computational efficiency and contribute to the advancement of modern technology.</p>
                
            <p>As an educator, I have mentored numerous students at undergraduate and postgraduate levels, shaping their understanding of emerging technologies. I have actively contributed to curriculum development, delivered insightful guest lectures, and conducted workshops at esteemed institutions. My research work is reflected in multiple journal publications, conference proceedings, and authored books, along with patents in automation and IoT.</p>
                
            <p>With a strong commitment to research and academic excellence, I strive to bridge the gap between theoretical concepts and real-world applications. I aim to inspire students and fellow researchers to engage in innovative problem-solving and critical thinking, fostering groundbreaking discoveries in the field of computing.</p>

            <p>My professional journey has been driven by a passion for knowledge dissemination and research innovation. Over the years, I have contributed to cutting-edge studies in cloud computing and data security while mentoring aspiring technologists. My ultimate goal is to empower students and researchers to push the boundaries of technology and make a meaningful impact in the digital era.</p>

        </div>
    </div>
</div>
    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="testimonial">
            <h2>“Success is not final; failure is not fatal: It is the courage to continue that counts.”</h2>
            <p>- Winston Churchill -</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
