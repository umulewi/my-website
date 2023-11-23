<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ntegerejimanalewis@gmail.com';
        $mail->Password = 'zwhcmifrjmnlnziz';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('your_email@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(false);
        $mail->Subject = $subject; // Set the subject from the form input
        $mail->Body = $message;
        $mail->send();
        $msg="email sent successfully";
    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lewis Nation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="assets/img/logo.png" rel="icon"> 
  <link href="assets/img/logo.png" rel="apple-touch-iconhh">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="indexf-page" data-bs-spy="scroll" data-bs-target="#navmenu" style="background-color: teal;">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt=""> 
       
        <span></span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#home" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="https://drive.google.com/file/d/1qjr39P2WUZtolgBbRB22tsR4QXL-hmMC/view?usp=sharing">Download CV</a>
      



    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="home" class="hero">

      <img src="assets/img/dis.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Lewis Nation </h2>
            <p data-aos="fade-up" data-aos-delay="200">we're your trusted technology partner,</p>
          </div>
          
        </div>
      </div>

    </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page -->
    

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>Lewis Nation</h2>
            <p style="text-align: justify";>we're your trusted technology partner, specializing in crafting stunning websites and custom software solutions that seamlessly blend form and function. With expert database management and server administration, we ensure your data is secure and your systems run smoothly. Plus, our CCTV installation services offer peace of mind by keeping your premises safe and secure. Let us simplify your tech needs and drive success for your business.</p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
          <script>
(function (w, d, s, u) {
w.gbwawc = {
url: u,
options: {
        waId: "+250 0787079467",
        siteName: "Lewis Goup",
        siteTag: "Active Now",
        siteLogo: "https://waw.gallabox.com/chatbotavatars/1.png",
        widgetPosition: "LEFT",
        triggerMessage: "Chat with Us",
        welcomeMessage: "hello!! how can we help you?",
        brandColor: "#25D366",
        messageText: "",
        replyOptions: ['','','',''],
    },
};
var h = d.getElementsByTagName(s)[0],
j = d.createElement(s);
j.async = true;
j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
h.parentNode.insertBefore(j, h);
})(window, document, "script", "https://waw.gallabox.com");
</script>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Skills</h3>
                  <p><div style="margin-top: 20px;">
                       
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>PHP</li>
                                <li>Java</li>
                                <li>Javascript</li>
                                <li>React js </li>
                                <li>React native</li>
                                <li>Laravel</li>
                                <li>Mysql</li>
                                <li>Oracle</li>
                                <li>CCTV Installation</li> 
                                

                            </ul>
                        </p>
                </div>
              </div> <!-- End Icon Box -->

               <!-- End Icon Box -->

              

            </div>
          </div>

        </div>
      </div>

    </section>

     </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page -->
    

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>Lewis Nation</h2>
            <p style="text-align: justify";>we're your trusted technology partner, specializing in crafting stunning websites and custom software solutions that seamlessly blend form and function. With expert database management and server administration, we ensure your data is secure and your systems run smoothly. Plus, our CCTV installation services offer peace of mind by keeping your premises safe and secure. Let us simplify your tech needs and drive success for your business.</p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
          <script>
(function (w, d, s, u) {
w.gbwawc = {
url: u,
options: {
        waId: "+250 0787079467",
        siteName: "Lewis Goup",
        siteTag: "Active Now",
        siteLogo: "https://waw.gallabox.com/chatbotavatars/1.png",
        widgetPosition: "LEFT",
        triggerMessage: "Chat with Us",
        welcomeMessage: "hello!! how can we help you?",
        brandColor: "#25D366",
        messageText: "",
        replyOptions: ['','','',''],
    },
};
var h = d.getElementsByTagName(s)[0],
j = d.createElement(s);
j.async = true;
j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
h.parentNode.insertBefore(j, h);
})(window, document, "script", "https://waw.gallabox.com");
</script>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Skills</h3>
                  <p><div style="margin-top: 20px;">
                       
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>PHP</li>
                                <li>Java</li>
                                <li>Javascript</li>
                                <li>React js </li>
                                <li>React native</li>
                                <li>Laravel</li>
                                <li>Mysql</li>
                                <li>Oracle</li>
                                <li>CCTV Installation</li> 
                                

                            </ul>
                        </p>
                </div>
              </div> <!-- End Icon Box -->

               <!-- End Icon Box -->

              

            </div>
          </div>

        </div>
      </div>

    </section>

    
    <section id="services" class="services">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Our dedicated[Lewis Nation] is committed to delivering top-notch services that exceed your expectations."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a  class="stretched-link">Website Design</a></h4>
                <p class="description">We create visually striking websites that leave a lasting impact, combining aesthetics with functionality for a powerful online presence.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a  class="stretched-link">Website development</a></h4>
                <p class="description">Beyond design, we bring websites to life with functionality and interactivity, ensuring a seamless online experience for your users.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a  class="stretched-link">Software Development</a></h4>
                <p class="description">Our custom software solutions are designed to streamline your operations, tailored precisely to your business needs, and powered by cutting-edge technology.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">CCTV Installation</a></h4>
                <p class="description">Our expert installations provide effective security solutions, offering real-time monitoring and peace of mind for your property.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Database Adminstartion</h4></a>
                <p class="description">We manage and optimize your data infrastructure, ensuring secure, well-organized, and readily accessible information</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a  class="stretched-link">Server Adminstartion</a></h4>
                <p class="description">We keep your IT infrastructure running smoothly and securely, whether on-premises or in the cloud, so you can focus on your core business objectives.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- End Services Section -->

    
    

    
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Feel free to reach out to our friendly company anytime for assistance or inquiries</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>KK 507 st</p>
                  <p>Kicukiro Kigali </p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+250 787 079 467</p>
                  <p>+250 791 447 200</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>ntegerejimanalewis@gmail.com</p>
                  <p>umulewi@gmail.com</p>
                  
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form method="post" action="">
              <div class="row gy-4">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="email" id="email" placeholder="email" required>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="suject" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button class="btn btn-danger" type="submit">send message</button>
                </div>
                 
                 <?php


                  echo $msg; 

                  ?>

                 
                
        
        
        
        
    </form>





          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Lewis Nation</span>
          </a>
          <p style="text-align: justify";>We make custom software and beautiful websites that fit your business perfectly. Our solutions are user-friendly and efficient. Whether you need software to make your work easier or a stunning website to shine online, we've got it covered."</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/MC_Lele1"><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/_lewis.2/"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/ntegerejimana-lewis-59454324b/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#services">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Software Development</a></li>
            <li><a href="#">Network Design</a></li>
            <li><a href="#">CCTV Installation</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12">
          <h4>Contact Us</h4>
          <p>KK507 st</p>
          <p>Kicukiro-Kigali</p>
          <p>Rwanda</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+250 787 079 467</span></p>
          <p><strong>Email:</strong> <span>ntegerejimanalewis@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Lewis Nation</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by Lewis</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  </body>
</html>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

