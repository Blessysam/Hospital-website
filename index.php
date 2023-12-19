<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Website</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">DocCure</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">

            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>

        </label>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#doctors">Doctors</a>
            <a href="#services">Services</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div class="home" id="home" >
        <div data-aos="fade-down" data-aos-duration='1200'>
            <h3>------ Welcome To DocCure ------</h3>
            <h2>Find Your Specialist</h2>
            <a href="hosp_form.php"><button type="button" class="btn" >Make Appointment</button></a>
            
        </div>
        
    </div>

    <section class="about" id="about">
        <div class="about-container">
            <div class="about-content"  data-aos="fade-up-right" data-aos-duration='1000'>
                <h2>About Us</h2>
                <h3>Experienced Workers:</h3>
                <p> Experienced healthcare professionals, including doctors, nurses, and specialists,
                    have honed their clinical skills. They are well-versed in diagnosing and treating 
                    various medical conditions, and they can provide the best possible care to patients.! </p>
                <h3>Patient-Centered Care:</h3>   
                <p>Experienced professionals often excel in providing patient-centered care, taking into 
                account not only the medical aspects but also the emotional and psychological
                needs of patients.</p>
            </div>
            <div class="about-img"  data-aos="fade-up-left" data-aos-duration='1000'>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fGhvc3BpdGFsfGVufDB8fDB8fHww">
            </div>

        </div>
    </section>
    <section class="doctors" id="doctors">
        <div class="doc-container"  >
            <div class="doc-content" data-aos="fade-right" data-aos-duration='800'>
                <img src="https://plus.unsplash.com/premium_photo-1673953509975-576678fa6710?auto=format&fit=crop&q=60&w=400&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZG9jdG9yfGVufDB8fDB8fHww" >
                <p><h3>Psychiatry</h3></p>
                <p> Deals with mental disorders and provides counseling.</p>
                <p><i class='bx bx-chevrons-right'></i></p>
            </div>
            <div class="doc-content" data-aos="fade-right" data-aos-duration='800'>
                <img src="https://images.unsplash.com/photo-1576089275776-b6cd5deabdad?auto=format&fit=crop&q=60&w=400&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODF8fGRvY3RvciUyMHNhbWUlMjBzaXplfGVufDB8fDB8fHww" >
                <p><h3>Oncology</h3></p>
                <p>Specializes in the diagnosis and treatment of cancer.</p>
                <p><i class='bx bx-chevrons-right'></i></p>
            </div>
            <div class="doc-content" data-aos="fade-left" data-aos-duration='800'>
                <img src="https://images.unsplash.com/photo-1571772996211-2f02c9727629?auto=format&fit=crop&q=60&w=400&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTR8fGRvY3RvcnxlbnwwfHwwfHx8MA%3D%3D" >
                <p><h3>Cardiology</h3></p>
                <p> Focuses on heart-related conditions and diseases.</p>
                <p><i class='bx bx-chevrons-right'></i></p>
            </div>
            <div class="doc-content" data-aos="fade-left" data-aos-duration='800'>
                <img src="https://images.unsplash.com/photo-1569830904560-2afd7062213c?auto=format&fit=crop&q=60&w=400&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nzd8fGRvY3RvciUyMHNhbWUlMjBzaXplfGVufDB8fDB8fHww" >
                <p><h3>Orthopedics</h3></p>
                <p>Concentrates on musculoskeletal and orthopedic surgeries.</p>
                <p><i class='bx bx-chevrons-right'></i></p>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h2>Our Speciality</h2>
        <div class="service-container">
            <div class="service-content" data-aos="zoom-in" data-aos-duration='800'>
                <img src="Images/icon-1.png">
                <span>Orthopedics</span>
            </div>
            <div class="service-content" data-aos="zoom-in" data-aos-duration='800'>
                <img src="Images/icon-2.png">
                <span>Gynecology</span>
            </div>
            <div class="service-content" data-aos="zoom-in" data-aos-duration='800'>
                <img src="Images/icon-3.png">
                <span>Pediatrics</span>
            </div>
            <div class="service-content" data-aos="zoom-in" data-aos-duration='800'>
                <img src="Images/icon-4.png">
                <span>Pulmonology</span>
            </div>
            <div class="service-content" data-aos="zoom-in" data-aos-duration='800'>
                <img src="Images/icon-5.png">
                <span>Psychiatry</span>
            </div>
            <div class="service-content" data-aos="zoom-in" data-aos-duration='800'>
                <img src="Images/icon-6.png">
                <span>Osteology</span>
            </div>
        </div>
    </section>
    <section class="blog" id="blog">
        <h2>Latest Articles</h2>
        <div class="blog-container">
            <div class="blog-content" data-aos="fade-up" data-aos-duration='1500'>
                <a href="#"><i class='bx bx-user'> BY SPECIALIST</i></a> 
                <h5>What are the symptoms of a heart attack?</h5>
                <p>Symptoms can include chest pain, shortness of breath, nausea, and pain radiating down the arm or jaw.</p>
                <a href="#"><i class='bx bx-file'> 21-Oct-2020</i></a> <br>
                <button type="button" class="btn"> Read More</button>
            </div>
            <div class="blog-content" data-aos="fade-down" data-aos-duration='1500'>
                <a href="#"><i class='bx bx-user'> BY SPECIALIST</i></a> 
                <h5>What is the purpose of chemotherapy?</h5>
                <p>Chemotherapy is a cancer treatment that uses drugs to kill or slow the growth of the cancer cells.</p>
                <a href="#"><i class='bx bx-file'> 16-Mar-2021</i></a> <br>
                <button type="button" class="btn"> Read More</button>
            </div>
            <div class="blog-content" data-aos="fade-up" data-aos-duration='1500'>
                <a href="#"><i class='bx bx-user'> BY SPECIALIST</i></a> 
                <h5>What is the role of the pancreas in digestion?</h5>
                <p>The pancreas produces digestive enzymes and hormones, including insulin, to regulate blood sugar levels.</p>
                <a href="#"><i class='bx bx-file'> 30-Aug-2023</i></a> <br>
                <button type="button" class="btn"> Read More</button>
            </div>
        </div>
    </section>
    <section class="footer" id="contact">
        <div class="footer-container">
            <div class="footer-content">
                <h3>DocCure</h3>
                <a href="#home">Home</a><br>
                <a href="#about">About</a><br>
                <a href="#doctors">Doctors</a><br>
                <a href="#services">Services</a><br>
                <a href="#blog">Blog</a><br>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-content">
                <h3>Services</h3>
                <a>Conditions</a><br>
                <a>Listing</a><br>
                <a>What We Offer</a><br>
                <a>Latest News</a><br>
                <a>Contact Us</a>
            </div>
            <div class="footer-content">
                <h3>Useful Links</h3>
                <a>Conditions</a><br>
                <a>Terms Of Use</a><br>
                <a>Our Services</a><br>
                <a>Join as a Doctor</a><br>
                <a>The Team List</a>
            </div>
            <div class="footer-content">
                <h3>Quick Contact</h3>
                <a><i class='bx bx-phone' ></i> - 8327132793</a><br>
                <a><i class='bx bx-envelope' ></i> - docure@gmail.com</a><br>
                <a><i class='bx bx-home' ></i> - Seoul,Korea.</a>
            </div>
        </div>
        <span class="footer-icons">
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
        </span>
        <hr>
        <p class="copyright">&#169; 2023 copyright all rights reserved</p>
    </section>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
            AOS.init();
    </script>

</body>
</html>