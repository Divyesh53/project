<?php include "includes/header.php" ?>

<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location:home.php");
}
?>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div style="height:120px" class="container-fluid">
            <a class="navbar-brand" href="#page-top"><img src="./assets/img/logo/Final HP-01.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse dropdmenu" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#feedback">feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="dailyReport.php">Daily logs</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container-fluid row">
            <div class="col-lg-6 para-content ">
                <!-- <div class="masthead-subheading">For All IT Solutions</div>
                <div class="masthead-heading text-uppercase">think hp</div>
                <div class="masthead-subheading text-uppercase">Consultant</div> -->

                <!-- <h4 class="masthead-subheading">For All IT Solutions...</h4> -->
                <h1 class="head-heading" style="color:#ffc800;">Grow your </h1>
                <h1 class="head-heading" style="color:#ffc800;">Business with us</h1><br>
                <!-- <a class="btn btn-primary button-style btn-xl text-uppercase" id="#service" href="#services">Tell Me More</a> -->
                <p style="text-align:justify;">Thinkhp consultant is a leading web development company delivering best service to the client. like
                    web development, web design, web security. Our team works closely with our clients to understand
                    their business needs and objectives, and to develop a tailored strategy to achieve their goals.</p>
            </div>

            <div class="col-lg-6 login-container">
                <form action="loginuser.php" method="post">
                    <h1 class="header-h1">Login</h1>
                    <div class="form-group">
                        <label for="username">Enter Email</label>
                        <input type="email" class="form-control" name="username" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Enter Password</label>
                        <input type="password" class="form-control" id="pass" name="password"
                            placeholder="Enter Password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" onclick="fun1()" class="btn btn-primary loginbtn btn-block">Login</button>
                    </div>

                    <div class="form-group">
                        <p class="text-center text-muted">Don't have an account? <a href="signup.php"
                                class=""><u>Register</u></a></p>
                    </div>

                    <div class="icons">
                        <a target="_main"
                            href="https://www.facebook.com/people/Hitesh-Patel/pfbid0cUWt7a6umpiKMivpWTenxA8m2Wqdscd9G4FvFzhsTyGcv8yQxaVv6AUceZRg1Fmol/?mibextid=ZbWKwL">
                        <a target="_main" href="https://www.instagram.com/thinkhpconsultant/"><ion-icon class="insta"
                                name="logo-instagram"></ion-icon></a>
                        <a target="_main" href="https://twitter.com/ThinkHP82"><ion-icon class="twitter"
                                name="logo-twitter"></ion-icon></a>
                        <a target="_main"
                            href="https://www.linkedin.com/in/thinkhpconsultant-llp-88242926a/?original_referer="><ion-icon
                                class="linkedin" name="logo-linkedin"></ion-icon></a>
                        <a target="_main" href="https://www.youtube.com/@thinkhpconsultant/featured"><ion-icon
                                class="youtube" name="logo-youtube"></ion-icon></a>
                    </div>

                </form>
            </div>


        </div>




        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">THINK HP CONSULTANT</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Web Devlopment</h4>
                    <p class="text-muted">Software developer services providers offer services to help businesses
                        develop and create software based on the requirements of their client,We help startups and
                        enterprises accelerate innovation.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Web Design</h4>
                    <p class="text-muted">Enhance productivity with technology services, including Software Development,
                        Artificial Intelligence These providers will estimate the time and cost of a project, then will
                        design, develop, test, and deliver the product to the client.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Web Security</h4>
                    <p class="text-muted">Web Security protection can make or break any business. That’s why our firm
                        has the most advanced web Security evaluation methods. We are more than IT experts. We are more
                        than network experts. We are full-scale security and system experts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">THINK HP CONSULTANT.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/bkgd.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2023</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Think HP consultancy is a startup with a mission to utilized the
                                expertized aquired during the long span of 20 years in Global IT industry to give
                                workable solutions</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>January 2023</h4> -->
                            <h4 class="subheading">Our work</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">This small group of the people has 15 Plus Years of working experience
                                in reasearch, Banking, Health as well as government industry. This core compettency has
                                been achieved by working at places like Gujarat, Bangalore and United States of America.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>December 2015</h4> -->
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> Think HP consultancy has most of the clients in United States with 5
                                years of projection plan to expand within
                                US and India. Think HP consultancy started working with few clients in Surat-Gujarat as
                                well as in Mumbai-Maharashtra too.
                        </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/vsn.jpeg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>July 2020</h4> -->
                            <h4 class="subheading">Our vision</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">The vision of Think HP consultancy LLP is to propose, plant and
                                process IT solutions in any and every small to large IT or Non-IT industry by growing
                                the base in India and expanding all over the globe.</p>
                        </div>
                    </div>
                </li>


                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/contact1.jpeg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>CONTACT US</h4>
                        </div>
                        <div class="timeline-body">

                            <p class="text-muted"><a href="tel:+91 8128220199"><i class="fa-1x fa-solid fa-phone contactUsLogo "></i>+91 8128220199</a></p>
                            <p class="text-muted"><a href="mailto:Thinkhpconsultant@gmail.com"><i class="fa-1x fa-sharp fa-solid fa-envelope contactUsLogo "></i> Thinkhpconsultant@gmail.com</a></p>
                            <p class="text-muted"><a href="https://maps.app.goo.gl/pRNzTM5LRvAaP8ZX7"><i class="fa-1x fa-solid fa-location-dot contactUsLogo "></i>111, Soham Arcade, pal, bhata, Surat, Gujarat,</a> </p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/social.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>January 2023</h4> -->
                            <h4 class="subheading">Social Media</h4>
                        </div>
                        <div class="timeline-body">
                            
                            <!-- <p class="text-muted"><a target="_main" href="https://www.facebook.com/people/Hitesh-Patel/pfbid0cUWt7a6umpiKMivpWTenxA8m2Wqdscd9G4FvFzhsTyGcv8yQxaVv6AUceZRg1Fmol/?mibextid=ZbWKwL"><ion-icon
                                class="fa-1x fb contactUsLogo " name="logo-facebook"></ion-icon>Hitesh Patel(Think HP Consultant)</a>
                            </p> -->

                            <p class="text-muted"><a target="_main" href="https://www.instagram.com/thinkhpconsultant/"><ion-icon class="insta contactUsLogo "
                                name="logo-instagram"></ion-icon>thinkhpconsultant</a>
                            </p>

                            <p class="text-muted"><a target="_main" href="https://twitter.com/ThinkHP82"><ion-icon class="twitter contactUsLogo "
                                name="logo-twitter"></ion-icon>Think HP Consultant</a>
                            </p>

                            <!-- <p class="text-muted"><a target="_main"
                            href="https://www.linkedin.com/in/thinkhpconsultant-llp-88242926a/?original_referer="><ion-icon
                                class="linkedin contactUsLogo " name="logo-linkedin"></ion-icon> thinkhpconsultant</a>
                            </p> -->

                            <p class="text-muted"><a target="_main" href="https://www.youtube.com/@thinkhpconsultant/featured"><ion-icon
                                class="youtube contactUsLogo " name="logo-youtube"></ion-icon>ThinkHPconsultant</a>
                            </p>

                        </div>
                    </div>
                </li>
                <!-- <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>January 2023</h4>
                            <h4 class="subheading">E-MAIL US</h4>
                        </div>
                        <a href="mailto:Thinkhpconsultant@gmail.com"><i class="fa-2x fa-sharp fa-solid fa-envelope"></i></a> <p class="text-muted">Thinkhpconsultant@gmail.com</p>

                               
                        <div class="timeline-body">

                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">ADDRESS</h4>
                        </div>
                        <div class="timeline-body">
                        <i class="fa-2x fa-solid fa-location-dot"></i>
                            <p class="text-muted"> 111, Soham Arcade, Baghban Circle, Surat, Gujarat, pin:-394510
                        </div>
                </li> -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>



            </ul>
        </div>
    </section>
    <!-- Team-->

    <div class="container">

    </div>
    </div>
    </section>


    <!-- Carousal Section about Teams details-->

    <section class="page-section bg-light" id="team">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">THINKHP CONSULTANT.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/hitesh sir.jpeg" alt="..." />
                                <h4>Hitesh Patel</h4>
                                <p class="text-muted">Founder</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/TIRTH.jpg" alt="..." />
                                <h4>Tirth Bharodiya</h4>
                                <p class="text-muted">Lead Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/dhruval123.jpg" alt="..." />
                                <h4>Dhruval Moradiya</h4>
                                <p class="text-muted">Lead Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">

                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">THINKHP CONSULTANT.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/jay.jpg" alt="..." />
                                <h4>Jay Dhimmer</h4>
                                <p class="text-muted">Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/abhi.jpeg" alt="..." />
                                <h4>Abhisekh vaghat</h4>
                                <p class="text-muted">Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/deep.jpg" alt="..." />
                                <h4>Deep Patel</h4>
                                <p class="text-muted">Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">

                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">THINKHP CONSULTANT.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/om.jpeg" alt="..." />
                                <h4>Om Dihora</h4>
                                <p class="text-muted">Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/dvs.jpg" alt="..." />
                                <h4>Divyesh Waghmare</h4>
                                <p class="text-muted">Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="./assets/img/team/jigar.jpeg" alt="..." />
                                <h4>Jigar Prajapati</h4>
                                <p class="text-muted">Developer</p>
                                <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Clients-->
    <!-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- feedback-->
    <section class="page-section" id="feedback">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">feedback</h2>
                <h3 class="section-subheading text-muted">THINKHP CONSULTANT</h3>
            </div>




            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" action="feedback.php" method="post">
                <div><label class="rating-label"><strong>Your experince</strong>
                        <input class="rating" name="rating" max="5"
                            oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5"
                            style="--value:1" type="range" value="1"></label></div>

                <div class="row align-items-stretch mb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *"
                                required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" name="userEmail" type="email"
                                placeholder="Your Email *" required />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- new -->
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="company" name="company_name" type="text"
                                placeholder="Company(Optional)" />
                            <!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                        </div>

                        <!-- new -->

                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="text" name="designation" type="text"
                                placeholder="Designation" />
                            <!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group  mb-md-0">
                            <!-- Message input-->
                            <input class="form-control" id="message" name="title" placeholder="Title*" required>
                        </div>

                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Phone number input-->
                            <textarea class="form-control" rows="8" id="title" name="message" type="text"
                                placeholder="Your Feedback*" required /></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A title number is required.
                            </div>
                        </div>




                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">

                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-left"><button class="btn btn-primary btn-xl button-style text-uppercase"
                        name="submitFeedback" id="submitButton" type="submit">Send Feedback</button></div>
            </form>
        </div>
    </section>

    <!-- Footer-->
    <?php include "includes/footer.php" ?>