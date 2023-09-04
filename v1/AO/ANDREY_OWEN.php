<!DOCTYPE html>
<html lang="en">

<?php
//Head
$name = 'Andrey Owen'
?>
 
 
 
<head>
   <title><?php echo $name;?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name;?>'s resume">
    <meta name="author" content="<?php echo $name;?>">    
    <link rel="shortcut icon" href="<?php echo 'assets/images/Icon.jpg';?>"> 
    
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
				        <img class="picture" src="assets/images/Icon.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $name ; ?></h1>
							    <div class="title mb-3"><?php echo "Software Developer"; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:owena5@nku.edu"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo "owena5@nku.edu"; ?></a></li>
								    <li><a class="text-link" href="tel:8595558307"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo "(859)555-8978"; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="https://www.linkedin.com/in/andreyowen/"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo "linkedin/andreyowen"; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="https://github.com/Dreymeister"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo "github.com/Dreymeister"; ?></a></li>
					                <li><a class="text-link" href="https://andreyowen.com"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo "andreyowen.com"; ?></a></li>
							    </ul>
						    </div><!--//secondary-info--> 
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Summary'?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo 'I am a Software Engineering student at Northern Kentucky University! I am a fourth year at the college and plan to obtain a Bachelors Degree in Applied Software Engineering. I like to study about programming and the fundamentals of designing programs. I also enjoy LEGO and hanging out with my fiance and my cats!' ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Work Experience'?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo'Freelance Developer'?></h3>
										        <div class="resume-company-name ms-auto"><?php echo'Northern Kentucky University'?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo'2022-Present'?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo'Working along my career pathway at NKU. Designing projects to further gain knowledge on the Software Engineering Process'?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo'Achievements'?></h4>
										    <p><?php echo'Working alongside other students to create work to prepare for employers.'?></p>
										    <ul>
											    <li><?php echo'Designed Animal Shelter website to incorperate MongoDB into workflow.'?></li>
											    <li><?php echo'Worked with Notion, Workspace, Notepad ++ and multiple languages to educate coding'?></li>
											    <li><?php echo'Created and tested multiple Java, HTML and Python programs'?></li
										    </ul>
											
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo'Technologies used:'?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Java'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Python'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'jQuery'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'MongoDB'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'HTML'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'React'?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo'LEGO Group Brick Specialist'?></h3>
										        <div class="resume-company-name ms-auto"><?php echo'LEGO'?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo'2020-2022'?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo'Working with customers in a very family friendly enviorment and helping people enjoy the product being sold.'?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo'Achievements within LEGO'?></h4>
										    <p><?php echo'Worked on large scale models incorperating building techniques designed for group work. '?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo'Skills gained:'?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Group-work'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Designing'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Engagement'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Problem-Solving'?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo'Grocery Store Part-Time Manager'?></h3>
										        <div class="resume-company-name ms-auto"><?php echo'Wyatts Supermarket'?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo'2012 - 2019'?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo'Managed a family-owned Grocery buisness once old enough to work. '?></p>
										    <p><?php echo'Helped learn time-management skills along with customer service skills.'?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo'Skills learned:'?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Team-work'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Time-management'?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo'Customer engagement'?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
					
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Skills &amp; Tools'?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo'Java'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '87';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo'Python'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '90';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo'React'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '80';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo'HTML'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '94';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo'C++'?></div> 
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo '91';?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo'Others:'?></h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo'Github'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo'MongoDB'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo'Notion'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo'Microsoft Word, Excel, Powerpoint'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo'Wireframe'?></span></li
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo'Education'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo'Bachelors Degree in Applied Software Engineering'?></div>
								        <div class="resume-degree-org"><?php echo'Northern Kentucky University'?></div>
								        <div class="resume-degree-time"><?php echo'2020-2024'?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo'High School Diploma'?></div>
								        <div class="resume-degree-org"><?php echo'Pendleton County High School'?></div>
								        <div class="resume-degree-time"><?php echo'2016 - 2020'?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo'Awards'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo'Microsoft Excellence Award'?></div>
								        <div class="resume-award-desc"><?php echo'Certified in every Microsoft Product'?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo'Honors Class Award'?></div>
								        <div class="resume-award-desc"><?php echo'Excellence for having high GPA + Good Grades'?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo'Languages'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo'English'?></span> <small class="text-muted font-weight-normal"><?php echo'(Native)'?></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?php echo'Russian'?></span> <small class="text-muted font-weight-normal"><?php echo'(Secondary)'?></small></li
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo'Interests'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo'LEGO'?></li>
								    <li class="mb-1"><?php echo'Computers'?></li>
								    <li class="mb-1"><?php echo'Weightlifting'?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo'Projects'?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/Image3.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo'Podscholar Application'?></h5>
									<p class="card-text"><?php echo'An orginized podcast website for test programming purposes.'?></p>
									<a class="btn btn-outline-primary" href="<?php echo 'https://github.com/khaidigidinos/PodScholar';?>" target='_blank'>Go to Repository</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/Image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo'Webpage Development'?></h5>
									<p class="card-text"><?php echo'Web Design and Development'?></p>
									<a class="btn btn-outline-primary" href="<?php echo 'https://github.com/Colevy-Collins/ASE-285-HW2';?>" target='_blank'>Go to Repository</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="./assets/images/Image1.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo'To-Do Application'?></h5>
									<p class="card-text"><?php echo'Glorified To-Do application to manage tasks in a list style.'?></p>
									<a class="btn btn-outline-primary" href="<?php echo 'https://github.com/Colevy-Collins/toy-project';?>" target='_blank'>Go to Repository</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $name?></small>
    </footer>

    

</body>
</html> 

