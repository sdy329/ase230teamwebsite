<!DOCTYPE html>
<html lang="en"> 

<?php
// Header Start
$name = 'Spencer Yates';
$title = 'Software Engineer';
$email = 'sdy329@gmail.com';
$phone = '270-300-2623';
$linkedIn = 'linkedin.com/in/sdy329';
$github = 'github.com/sdy329';
$personalWeb = 'sdy329.com';

// Jobs
$summary = 'In 2013, I decided to join a VEX Robotics team through my school. This decision started an eventful journey that inevitably helped me find my calling. Initially driven by the idea of becoming a mechanical engineer, I quickly realized my passion for programming. This spark has guided me throughout my academic & robotic endeavors over the years. A few accomplishments I am proud to share: 2019: Founded an international robotics alliance. 2020: Created the first competitive robotics program at Northern Kentucky University. 2023: Finished 3rd place at the VEX World Championship. Represented the VEX Robotics Competition when addressing various companies. Currently I am finishing my degree at Northern Kentucky University, on track to graduate in Spring 2024. Additionally, I have an internship as a service technician at Global Business Solutions. In my free time, I enjoy refereeing for a few VEX Robotics tournaments (High School), hiking, and cheering on my favorite soccer teams.';
$jobTitles = array('Service Technician Intern','Phone Agent','Tree Care Technician', 'Camp Counselor');
$workplaces = array('Global Business Solutions', 'Northern Kentucky University', 'His Hands Tree Service', 'Camp Crooked Creek');
$intern = '<small class="text-muted">(Intern)</small>';
$positionHeld = array('2023 - Present','2022 - 2023', '2020 - 2020', '2016 - 2018');
?>

<head>
    <title><?php echo $name;?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name;?>'s resume">
    <meta name="author" content="<?php echo $name;?>">    
    <link rel="shortcut icon" href="<?php echo 'assets/images/Icon.png';?>"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.png" alt="">
				    </div>
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $name;?></h1>
							    <div class="title mb-3"><?php echo $title;?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:<?php echo $email;?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $email;?></a></li>
								    <li><a class="text-link" href="tel:<?php echo $phone;?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phone;?></a></li>
							    </ul>
						    </div>
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?php echo 'https://' . $linkedIn;?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $linkedIn;?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo 'https://' . $github;?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $github;?></a></li>
					                <li><a class="text-link" href="<?php echo 'https://' . $personalWeb;?>" target="_blank"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $personalWeb;?></a></li>
							    </ul>
						    </div>
					    </div>
				    </div>
			    </div>
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Summary'?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $summary;?></p>
				    </div>
			    </section>
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Work Experience'?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitles[0] . $intern;?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $workplaces[0];?></div>
										    </div>
										    <div class="resume-position-time"><?php echo $positionHeld[0];?></div>
									    </div>
									    <div class="resume-timeline-item-desc">
										    <ul>
												<li><?php echo 'Provided complete IT technical support services to 15,000+ end users in a customer first IT firm with 500+ corporate customers.';?></li>
												<li><?php echo 'Efficiently solved customer issues daily using system operation and customer service skills.';?></li>
												<li><?php echo 'Worked fluently as a team with other Service Technicians to troubleshoot solutions efficiently.';?></li>
												<li><?php echo 'Work with higher level Service Technicians to learn Microsoft Azure, networks, and firewalls.';?></li>
											</ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Technologies used:';?></h4>
										    <ul class="list-inline">
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Powershell';?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Active Directory';?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Microsoft Admin';?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo 'Firewalls';?></span></li>
										    </ul>
									    </div>
								    </article>
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitles[1];?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $workplaces[1];?></div>
										    </div>
										    <div class="resume-position-time"><?php echo $positionHeld[1];?></div>
									    </div>
									    <div class="resume-timeline-item-desc">
										<ul>
												<li><?php echo 'Advised students and parents on scholarship and aid research';?></li>
												<li><?php echo 'Safely handle exchange of confidential and sensitive information between students and other financial aid staff.';?></li>
												<li><?php echo 'Filter incoming documents for accuracy, completeness, and return incomplete or missing documentation to students in a timely manner';?></li>
												<li><?php echo 'Work with and securely distribute documents to other offices within the university.';?></li>
											</ul>
									    </div>
								    </article>
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitles[2];?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $workplaces[2];?></div>
										    </div>
										    <div class="resume-position-time"><?php echo $positionHeld[2];?></div>
									    </div>
									    <div class="resume-timeline-item-desc">
											<ul>
												<li><?php echo 'Worked within a precise schedule to provide quality service to customers in a timely manner.';?></li>
												<li><?php echo 'Ensured safety while working within a high danger environment.';?></li>
											</ul>
									    </div>
								    </article>
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $jobTitles[3];?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $workplaces[3];?></div>
										    </div>
										    <div class="resume-position-time"><?php echo $positionHeld[3];?></div>
									    </div>
									    <div class="resume-timeline-item-desc">
										<ul>
												<li><?php echo 'Worked within a team to deliver a nationally honored service';?></li>
												<li><?php echo 'Planned and Delivered presentations to youth on robotics and software development.';?></li>
												<li><?php echo 'Provided customer service in a high stress work environment.';?></li>
											</ul>
									    </div>
								    </article>
							    </div>
						    </div>
					    </section>
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Skills &amp; Tools'?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'JavaScript';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '98';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'TypeScript';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '96';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'React';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '94';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'Node.js';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '96';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'Java';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '95';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo 'Others'?></h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Python';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Powershell';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'C';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'C++';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Wireframing';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Git';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Networks';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Troubleshooting';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Leadership';?></span></li>
						            </ul>
						        </div>
						    </div>
					    </section>
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Education'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo 'BSc Applied Sotware Engineering';?></div>
								        <div class="resume-degree-org"><?php echo 'Northern Kentucky University';?></div>
								        <div class="resume-degree-time"><?php echo '2019 - 2024';?></div>
								    </li>
							    </ul>
						    </div>
					    </section>
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Awards'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo 'VEX Worlds Division Finalists 2023';?></div>
								        <div class="resume-award-desc"><?php echo 'Out of 100 teams in attendance at the world championships, and 300 individual collegiate teams worldwide our team ended the season top 4 in the world.';?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Languages'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo 'English'?></span> <small class="text-muted font-weight-normal">(Native)</small></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Interests'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo 'Soccer';?></li>
								    <li class="mb-1"><?php echo 'Robotics';?></li>
								    <li class="mb-1"><?php echo 'Camping';?></li>
							    </ul>
						    </div>
					    </section>
				    </div>
			    </div>
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Projects'?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/NUKEBanner.png" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'NUKE Robotics Programming';?></h5>
									<p class="card-text"><?php echo 'I founded a competitive robotics program at Northern Kentucky University. My roles on the team included: President, Programmer, and Driver.';?></p>
									<a class="btn btn-outline-primary" href="<?php echo 'https://github.com/NUKE-robotics';?>" target='_blank'>Go to Repository</a>
								</div>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/KVSBanner2.png" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'KVS Discord Bot';?></h5>
									<p class="card-text"><?php echo 'Discord Bot I develop to help with moderation of the Kentucky VEX Discord Server.';?></p>
									<a class="btn btn-outline-primary" href="<?php echo 'https://github.com/sdy329/kvs-bot';?>" target='_blank'>Go to Repository</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/BigBroBanner.png" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'BigBro Discord Bot';?></h5>
									<p class="card-text"><?php echo 'Discord Bot I develop to help with moderation of the Vex Robotics Discord Server.';?></p>
									<a class="btn btn-outline-primary" href="<?php echo 'https://github.com/jtkiesel/bigbro';?>" target='_blank'>Go to Repository</a>
								</div>
							</div>
						</div>
					</div>
				</section>
		    </div>
	    </div>
    </article> 
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $name;?></small>
    </footer>

    

</body>
</html> 

