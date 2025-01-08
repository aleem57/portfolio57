<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- PAGE TITLE -->
    <title>Aleem Akhtar</title>
    <!-- FAVICON ICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- ALL GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&amp;family=Syne:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- NICE SELECT CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <!-- SPACING CSS -->
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
$errors = [];

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
	$phone_number = isset($_POST['phone_number']) ? strip_tags(trim($_POST['phone_number'])) : '';
	$subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    // Validate form fields
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    // If no errors, send email
    if (empty($errors)) {
        // Recipient email address (replace with your own)
        $recipient = "aleemakhtar57@gmail.com";

        // Additional headers
        $headers = "From: $name <$email> <$phone_number> <$subject> <$message>";

		$body = "<p>Name:".$name."</p>";
		$body .= "<p>Email:".$email."</p>";
		$body .= "<p>Phone Number:".$phone_number."</p>";
		$body .= "<p>Subject:".$subject."</p>";
		$body .= "<p>Message:".$message."</p>";
		
        // Send email
        if (mail($recipient,"COntact us form", $body, $headers)) {
			$success = true;
            //echo "Email sent successfully!";
        }
    } else {
        // Display errors
        echo "The form contains the following errors:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
}
?>
    <!-- START PRELOADER AREA-->
    <div id="preloader-area">
        <div class="loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- END PRELOADER AREA -->
    <!-- START MENU DESIGN AREA -->
    <header class="main-header menu-absolute">
        <div class="header-upper">
            <div class="container">
                <div class="header-inner d-flex align-items-center">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo-outer">
                        <div class="logo">
                            <a href="#"><img src="assets/images/logos/logo.png" alt="Logo" title="Logo" /></a>
                        </div>
                    </div>
                    <!-- / END LOGO DESIGN AREA -->
                    <!-- START NAV DESIGN AREA -->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <div class="mobile-logo my-15">
                                    <a href="#">
                                        <img src="assets/images/logos/logo.png" alt="Logo" title="Logo" />
                                    </a>
                                </div>
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="navigation onepage clearfix">
                                    <li><a class="nav-link-click" href="#home">Home</a></li>
                                    <li><a class="nav-link-click" href="#about">about</a></li>
                                    <li><a class="nav-link-click" href="#resume">Resume</a></li>
                                    <li><a class="nav-link-click" href="#services">services</a></li>
                                    <li><a class="nav-link-click" href="#skills">skills</a></li>
                                    <li><a class="nav-link-click" href="#portfolio">projects</a></li>
                                    <li><a class="nav-link-click" href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- / END NAV DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END MENU DESIGN AREA -->
    <!-- START HEADER DESIGN AREA -->
    <section id="home" class="main-hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12">
                    <!-- START HERO DESIGN AREA -->
                    <div class="hero-content rmb-25 wow fadeInUp delay-0-2s text-center">
                        <h2>Hi! 👋 My name is Aleem Akhtar</h2>
                        <h1>UX / UX, <span>Shopify, WordPress, React, Magento UI</span> Developer</h1>
                        <div class="dot-shape">
                            <img src="assets/images/shape/about-dot.png" alt="Shape" />
                        </div>
                        <div class="dot-shape2">
                            <img src="assets/images/shape/dot-shape-circle.png" alt="Shape" />
                        </div>
                        <div class="hero-btns">
                            <a href="#contact" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- / END HERO DESIGN AREA -->
                    <!-- START COUNTER DESIGN AREA -->
                    <div class="hero-counter-area d-flex justify-content-around wow fadeInUp delay-0-4s">
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text plus" data-speed="3000" data-stop="12">0</span>
                            <span class="counter-title">Years Of Experience</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text plus" data-speed="3000" data-stop="200">0</span>
                            <span class="counter-title">Complete Projects</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text percent" data-speed="3000" data-stop="99">0</span>
                            <span class="counter-title">Client Satisfactions</span>
                        </div>
                    </div>
                    <!-- / END COUNTER DESIGN AREA -->
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- / END HEADER DESIGN AREA -->
	
	<?php if($success) {
		echo "Mail sent successfully";
	} else if(count($erros)>0) {
		$errorContents = "<p>The form contains the following errors:</p>";
		$errorContents = $errorContents."<ul>";
        foreach ($errors as $error) {
			
           $errorContents = $errorContents."<li>".$error."</li>";
        }
		$errorContents = $errorContents."</ul>";
		echo $errorContents;
	}
	?>
    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-area">
        <div class="container">
            <div class="row gap-100 align-items-center">
                <!-- START ABOUT IMAGE DESIGN AREA -->
                <div class="col-lg-5">
                    <div class="about-image-part wow fadeInUp delay-0-3s">
                        <img src="assets/images/about/about1.jpg" alt="About Me" />
                        <div class="about-btn btn-one wow fadeInRight delay-0-4s">
                            <h6>Available for Work</h6>
                            <div class="circle pulse color-pulse"></div>
                        </div>
                        <div class="dot-shape">
                            <img src="assets/images/shape/about-dot.png" alt="Shape" />
                        </div>
                    </div>
                </div>
                <!-- / END ABOUT IMAGE DESIGN AREA -->
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-lg-7">
                    <div class="about-content-part rel z-2 rmb-55">
                        <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">About Me</span>
                            <h2>Around 11+ years of experience in developing User Interfaces for Mobile/Tablet/Desktop using <span>HTML, CSS, JavaScript, jQuery, Bootstrap, Elementor</span>.
                            </h2>
                            <p>Experience in Web Portal Websites and design for private client and industrial website use. Designed many web portal websites from scratch.
                            </p>
							

                        </div>
                        <ul class="list-style-one one-column wow fadeInUp delay-0-2s">
                           <li><span>Web Technologies:</span> HTML5, CSS3, Bootstrap, jQuery, JavaScript, LESS, SASS, Responsive website</p>
<li><span>JS Frameworks:</span> React</p>
<li><span>Graphic Tools:</span> Adobe Photoshop, Figma, Sketch, Invision</p>
<li><span>IDE:</span> Notepad++, Visual Studio, Dreamweaver</p>
<li><span>Version Control System:</span> GIT</p>
<li><span>CMS:</span> WordPress, Shopify, Magento (Theming)</p>
<li><span>Operating Systems:</span> Windows, Linux</p>
<li>UI Design, User Flow, Wireframe</p>

                        </ul>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->
    <!-- START RESUME DESIGN AREA -->
    <section id="resume" class="resume-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="section-title mb-60 wow fadeInUp delay-0-2s text-center">
                                <span class="sub-title mb-15">My Resume</span>
                                <h2>Showcase Your <span>Talent</span> amplifing your impact </h2>
                            </div>
                        </div>
                    </div>
                    <div class="resume-items-wrap">
                        <div class="row justify-content-between">
                            <!-- START SINGLE RESUME DESIGN AREA -->
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-3s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">Sep 2017 - Present</span>
                                         <h4>Team Lead</h4>
                                        <span class="company">EZ Commerce India (Narana Tech Pvt Ltd)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- / END SINGLE RESUME DESIGN AREA -->
                            <!-- START SINGLE RESUME DESIGN AREA -->
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">Aug 2014 - Sep 2017</span>
                                        <h4>UI / UX Developer </h4>
                                        <span class="company">Conceptol</span>
                                    </div>
                                </div>
                            </div>
                            <!-- / END SINGLE RESUME DESIGN AREA -->
                            <!-- START SINGLE RESUME DESIGN AREA -->
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-2s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">Nov 2013 - Aug 2014</span>
                                        <h4>Web Designer </h4>
                                        <span class="company">Robo Consulting</span>
                                    </div>
                                </div>
                            </div>
                            <!-- / END SINGLE RESUME DESIGN AREA -->
                            <!-- START SINGLE RESUME DESIGN AREA -->
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">Oct 2012 - Nov 2013</span>
                                        <h4>Web Designer </h4>
                                        <span class="company">Technologus</span>
                                    </div>
                                </div>
                            </div>
                            <!-- / END SINGLE RESUME DESIGN AREA -->
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END RESUME DESIGN AREA -->
    <!-- START SERVICE DESIGN AREA -->
    <section id="services" class="services-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Services</span>
                        <h2>
                            My <span>Special Service</span> For your Website Development
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="content">
                           <img src="assets/images/skills/ui-ux.png" alt="" />
                            <h4>UI/UX Design</h4>
                            <p>To present the data in a consistent and organized manner, do you require a dashboard design, an admin panel UI, OR a UX Design</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="content">
                            <img src="assets/images/skills/Website-Design.png" alt="" />
                            <h4>Website Design</h4>
                            <p>Enhance your online presence with our expertise. Stunning designs, user-friendly interfaces, and optimized performance. </p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        <div class="content">
                             <img src="assets/images/skills/Logo-Branding.png" alt="" />
                            <h4>Logo and Branding</h4>
                            <p> We create unique visual identities that capture your brand's essence, leaving a memorable mark in the minds of your audience.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
				<!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="content">
                               <img src="assets/images/skills/Dashboard-Design.png" alt="" />
                            <h4>Dashboard Design</h4>
                            <p>With the help of a deeper understanding of UI UX Design, I will create any type of dashboard design or multi-page dashboard page UI UX design.</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="content">
                             <img src="assets/images/skills/Landing-Page-Design.png" alt="" />
                            <h4>Landing Page Design</h4>
                            <p>We specialize in delivering tailored solutions for businesses in need of a persuasive and conversion-centric landing page</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
                <!-- START SINGLE SERVICE DESIGN AREA -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        <div class="content">
                              <img src="assets/images/skills/eCommerce-Website-Design.png" alt="" />
                            <h4>eCommerce Website Design</h4>
                            <p>Ee specialize in elevating online businesses through exceptional eCommerce website design</p>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE SERVICE DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SERVICE DESIGN AREA -->
    <!-- START SKILL DESIGN AREA -->
    <section id="skills" class="skill-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Our Skills</span>
                        <h2>
                            Let’s Explore Popular <span>Skills & Experience</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="skill-items-wrap">
                        <div class="row">
						 <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-4s">
                                    <img src="assets/images/skills/skill3.png" alt="Skill" />
                                    <h5>Photoshop</h5>
                                    <span class="percent">98%</span>
                                </div>
                            </div>
							  <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/skill8.png" alt="Skill" />
                                    <h5>Sketch</h5>
                                    <span class="percent">95%</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-2s">
                                    <img src="assets/images/skills/skill1.png" alt="Skill" />
                                    <h5>Figma</h5>
                                    <span class="percent">90%</span>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-3s">
                                    <img src="assets/images/skills/invision.png" alt="Skill" />
                                    <h5>Invision</h5>
                                    <span class="percent">95%</span>
                                </div>
                            </div>
                          
                            <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/html-5.png" alt="Skill" />
                                    <h5>HTML 5</h5>
                                    <span class="percent">99%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/bootstrap.png" alt="Skill" />
                                    <h5>Bootstrap</h5>
                                    <span class="percent">99%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/css-3.png" alt="Skill" />
                                    <h5>CSS 3</h5>
                                    <span class="percent">99%</span>
                                </div>
                            </div>
							  <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/elementor.png" alt="Skill" />
                                    <h5>Elementor</h5>
                                    <span class="percent">99%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/skill6.png" alt="Skill" />
                                    <h5>Webflow</h5>
                                    <span class="percent">90%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-3s">
                                    <img src="assets/images/skills/skill2.png" alt="Skill" />
                                    <h5>Tailwand</h5>
                                    <span class="percent">90%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-4s">
                                    <img src="assets/images/skills/github.png" alt="Skill" />
                                    <h5>Git</h5>
                                    <span class="percent">90%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-5s">
                                    <img src="assets/images/skills/skill4.png" alt="Skill" />
                                    <h5>WordPress</h5>
                                    <span class="percent">95%</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-2s">
                                    <img src="assets/images/skills/react.png" alt="Skill" />
                                    <h5>React</h5>
                                    <span class="percent">90%</span>
                                </div>
                            </div>
							
                           
                            <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-4s">
                                    <img src="assets/images/skills/shopify.png" alt="Skill" />
                                    <h5>Shopify</h5>
                                    <span class="percent">95%</span>
                                </div>
                            </div>
							<div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="skill-item wow fadeInUp delay-0-4s">
                                    <img src="assets/images/skills/magento.png" alt="Skill" />
                                    <h5>Magento</h5>
                                    <span class="percent">95%</span>
                                </div>
                            </div>
							
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END SKILL DESIGN AREA -->
    <!-- START PORTFOLIO DESIGN AREA -->
    <section id="portfolio" class="projects-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Latest Works</span>
                        <h2>View My Latest <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <ul class="project-filter filter-btns-one justify-content-center pb-35 wow fadeInUp delay-0-2s">
                <li data-filter="*" class="current">Show All</li>
                <li data-filter=".design">Design</li>
                <li data-filter=".bootstrap">Bootstrap</li>
				<li data-filter=".wordpress">Wordpress</li>
                <li data-filter=".shopify">Shopify</li>
                <li data-filter=".magento">Magento</li>
            </ul>
            <div class="row project-masonry-active">
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design magento bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/mumandyou.jpg" alt="Project">
                            <a href="https://mumandyou.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">UK based E-Commerce)</span>
                            <h3><a href="#">Mum &amp; You</a></h3>
                        </div>
                    </div>
                </div> 
				<div class="col-lg-4 col-md-6 item design shopify bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/mumandyou-us.jpg" alt="Project">
                            <a href="https://mumandyou.us/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">US based E-Commerce</span>
                            <h3><a href="#">Mum &amp; You</a></h3>
                        </div>
                    </div>
                </div>
                <!-- START PORTFOLIO DESIGN AREA -->
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design shopify">
                    <div class="project-item style-two wow fadeInUp delay-0-4s">
                        <div class="project-image">
                            <img src="assets/images/projects/captainzack.jpg" alt="Project">
                            <a href="https://captainzack.in/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Pet Care E-Commerce</span>
                            <h3><a href="#">Captain Zack</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordPress">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/themap.jpg" alt="Project">
                            <a href="https://themap.news/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">News Website</span>
                            <h3><a href="#">The Map </a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordPress">
                    <div class="project-item style-two wow fadeInUp delay-0-4s">
                        <div class="project-image">
                            <img src="assets/images/projects/fieldassist.jpg" alt="Project">
                            <a href="https://www.fieldassist.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Sales and Distribution Software Platform </span>
                            <h3><a href="#">Field Assist </a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/12flags.jpg" alt="Project">
                            <a href="https://12flags.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Fund Raising for business</span>
                            <h3><a href="#">12 Flags</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
               	<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/thepixen.jpg" alt="Project">
                            <a href="http://thepixen.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Photographer</span>
                            <h3><a href="#">The Pixen</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/eonclinics.jpg" alt="Project">
                            <a href="https://www.eonclinics.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Dental Implants</span>
                            <h3><a href="#">EON Clinics</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
           	<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/musclefuel.jpg" alt="Project">
                            <a href="#" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Workout Supplement E-Commerce</span>
                            <h3><a href="#">Muscle Fuel</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/BritanniaMarine.jpg" alt="Project">
                            <a href="#" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Ship parts and equipment</span>
                            <h3><a href="#">Britannia Marine</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA --> <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/pnfit.jpg" alt="Project">
                            <a href="https://pnfit.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Health Nutrition&#039;s &amp; Fitness Supplement&#039;s Store</span>
                            <h3><a href="#">Pro Nutrition & Fitness</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA --> 
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design magento">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/purefruittechnologies.jpg" alt="Project">
                            <a href="https://www.purefruittechnologies.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Mangoxan Mangosteen Fruit Juice Online</span>
                            <h3><a href="#">Pure Fruit Technologies</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/nationalach.jpg" alt="Project">
                            <a href="https://nationalach.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Echecks and Credit Card Payments Processing</span>
                            <h3><a href="#">NationalACH</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/zeopto.jpg" alt="Project">
                            <a href="https://www.zeopto.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Digital Transformation Drive-Rise with SAP</span>
                            <h3><a href="#">Zeopto IT Services</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA --> 
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design shopify">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/sensbodycare.jpg" alt="Project">
                            <a href="https://sensbodycare.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Bodycare Products</span>
                            <h3><a href="#">Sens Bodycare</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design shopify">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/pettofoods.jpg" alt="Project">
                            <a href="https://pettofoods.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Pet Care Foods E-Commerce</span>
                            <h3><a href="#">Petto Smart Nutrition</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design magento">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/goodmatch.jpg" alt="Project">
                            <a href="https://www.goodmatch.it/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Italy based E-Commerce</span>
                            <h3><a href="#">Good Match</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA --> 
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design magento">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/lensexperts.jpg" alt="Project">
                            <a href="https://lensexperts.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Contacts Lenses E-Commerce </span>
                            <h3><a href="#">Lens Experts</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/pureceuticalsskincare.jpg" alt="Project">
                            <a href="https://pureceuticalsskincare.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Natural Skincare Products</span>
                            <h3><a href="#">PureCeuticals Skin Care</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/unscratchthesurface.jpg" alt="Project">
                            <a href="https://unscratchthesurface.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Large Window &amp; Door Resurfacing</span>
                            <h3><a href="#">Unscratch The Surface</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA --> 
				<!-- START SINGLE PORTFOLIO DESIGN AREA -->
                <div class="col-lg-4 col-md-6 item design wordpress bootstrap">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/ricebeltofficials.jpg" alt="Project">
                            <a href="http://ricebeltofficials.com/" target="_blank" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Sports Officials</span>
                            <h3><a href="#">Katy Ricebelt Officials Associations</a></h3>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
				
           
            </div>
        </div>
    </section>
    <!-- // END PORTFOLIO DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-content-part pt-5 rpt-0 rmb-25 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">Contact me</span>
                            <h2>Let’s Talk About your <span>Next Projects</span></h2>
                            <p>I'm happy to connect, listen and help. Let's work together and build something awesome. Let's turn your idea to an even greater product.
                            </p>
                        </div>
                       
                        <!-- START CONTACT SINGLEDESIGN AREA -->
                        <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <h2>contact number:</h2>
                            <p>+91-9582284886</p>
                        </div>
                        <!-- / END CONTACT SINGLEDESIGN AREA -->
                        <!-- START CONTACT SINGLEDESIGN AREA -->
                        <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h2>Email us:</h2>
                            <p>aleemakhtar57@gmail.com</p>
                        </div>
                        <!-- / END CONTACT SINGLEDESIGN AREA -->
                    </div>
                </div>
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="col-lg-8">
                    <div class="contact-form contact-form-area wow fadeInUp delay-0-4s">
                        <form id="contactForm" class="contactForm" name="contactForm" action="https://aleem57.netlify.app/index.php" method="post">
						
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Your Name" required="" data-error="Please enter your Name" />
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="Your Email" required="" data-error="Please enter your Email" />
                                        <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="+1234567890" required="" data-error="Please enter your Phone Number" />
                                        <label for="phone_number" class="for-icon"><i class="far fa-phone-alt"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required="" data-error="Please enter your Subject" />
                                        <label for="subject" class="for-icon"><i class="far fa-text"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write your Message" required="" data-error="Please Write your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn">
                                            Send Me Message <i class="far fa-angle-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- / END CONTACT FORM DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->
    <!-- START FOOTER DESIGN AREA -->
    <footer class="main-footer">
        <div class="footer-bottom pt-50 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p>
                                Copyright @ 2024. All Rights Reserved.
                            </p>
                        </div>
                        <ul class="footer-bottom-nav">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="https://www.linkedin.com/in/aleemakhtar57/" target="_blank">Instagram</a></li>
                            <li><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END FOOTER DESIGN AREA -->
    <!-- START SCROOL UP DESIGN AREA -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
    <!-- JQUERY JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- APPEAR JS -->
    <script src="assets/js/appear.min.js"></script>
    <!-- SLICK JS-->
    <script src="assets/js/slick.min.js"></script>
    <!-- NICE SELECT JS-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- IMAGE LOADER JS-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- ISOTOPE JS-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW ANIMATION JS-->
    <script src="assets/js/wow.min.js"></script>
    <!-- SCRIPT JS-->
    <script src="assets/js/script.js"></script>
</body>
</html>
