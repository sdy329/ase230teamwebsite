<?php

$members=[
    'spencer'=>[
        'firstN'=>'Spencer',
        'lastN'=>'Yates',
        'role'=>'',
        'profile'=>'.\\assets\\img\\SY\\profile.png',
		'favicon'=>'.\\assets\\img\\SY\\icon.png',
		'jobTitle'=>'Software Engineer',
		'socials'=>[
			'email'=>'sdy329@gmail.com',
			'phone'=>'270-300-2623',
			'linkedin'=>'linkedin.com/in/sdy329',
			'github'=>'github.com/sdy329',
			'website'=>'sdy329.com'
		],
		'summary'=>'In 2013, I decided to join a VEX Robotics team through my school. This decision started an eventful journey that inevitably helped me find my calling. Initially driven by the idea of becoming a mechanical engineer, I quickly realized my passion for programming. This spark has guided me throughout my academic & robotic endeavors over the years. A few accomplishments I am proud to share: 2019: Founded an international robotics alliance. 2020: Created the first competitive robotics program at Northern Kentucky University. 2023: Finished 3rd place at the VEX World Championship. Represented the VEX Robotics Competition when addressing various companies. Currently I am finishing my degree at Northern Kentucky University, on track to graduate in Spring 2024. Additionally, I have an internship as a service technician at Global Business Solutions. In my free time, I enjoy refereeing for a few VEX Robotics tournaments (High School), hiking, and cheering on my favorite soccer teams.',
		'jobs'=>[
			'Service Technician Intern'=>[
				'company'=>'Global Business Solutions',
				'start'=>'2023',
				'end'=>'Present',
				'description'=>'Provided complete IT technical support services to 15,000+ end users in a customer first IT firm with 500+ corporate customers. Efficiently solved customer issues daily using system operation and customer service skills. Worked fluently as a team with other Service Technicians to troubleshoot solutions efficiently. Work with higher level Service Technicians to learn Microsoft Azure, networks, and firewalls.',
				'achievements'=>[
				],
				'skills'=>[
					'test1',
					'test2'
				]
			],
			'Phone Agent'=>[
				'company'=>'Northern Kentucky University',
				'start'=>'2022',
				'end'=>'2023',
				'description'=>'Advised students and parents on scholarship and aid research. Safely handle exchange of confidential and sensitive information between students and other financial aid staff. Filter incoming documents for accuracy, completeness, and return incomplete or missing documentation to students in a timely manner. Work with and securely distribute documents to other offices within the university.',
				'achievements'=>[
				],
				'skills'=>[
					'test1',
					'test2'
				]
			],
			'Tree Care Technician'=>[
				'company'=>'His Hands Tree Service',
				'start'=>'2020',
				'end'=>'2020',
				'description'=>'Worked within a precise schedule to provide quality service to customers in a timely manner. Ensured safety while working within a high danger environment.',
				'achievements'=>[
				],
				'skills'=>[
					'test1',
					'test2'
				]
			],
			'Camp Counselor'=>[
				'company'=>'Camp Crooked Creek',
				'start'=>'2016',
				'end'=>'2018',
				'description'=>'Worked within a team to deliver a nationally honored service. Planned and Delivered presentations to youth on robotics and software development. Provided customer service in a high stress work environment.',
				'achievements'=>[
				],
				'skills'=>[
					'test1',
					'test2'
				]
			],
		],
		'proSkills'=>[
			'JavaScript'=>[
				'progress'=>'98',
			],
			'TypeScript'=>[
				'progress'=>'96',
			],
			'React'=>[
				'progress'=>'94',
			],
			'Node.js'=>[
				'progress'=>'96',
			],
			'Java'=>[
				'progress'=>'95',
			],
		],
		'otherSkills'=>[
			'Python',
			'Powershell',
			'C',
			'C++',
			'Wireframing',
			'Git',
			'Networks',
			'Troubleshooting',
			'Leadership',
		]
    ],
	'andrey'=>[
		'firstN'=>'Andrey',
		'lastN'=>'Owen',
		'role'=>'',
		'profile'=>'.\\assets\\img\\AO\\Icon.jpg',
		'favicon'=>'.\\assets\\img\\AO\\icon.jpg',
		'jobTitle'=>'Software Engineer',
		'socials'=>[
			'email'=>'owena5@nku.edu',
			'phone'=>'859-496-9307',
			'linkedin'=>'linkedin.com/in/andreyowen',
			'github'=>'github.com/Dreymeister',
			'website'=>'andreyowen.com'
		],
		'summary'=>'I am a Software Engineering student at Northern Kentucky University! I am a fourth year at the college and plan to obtain a Bachelors Degree in Applied Software Engineering. I like to study about programming and the fundamentals of designing programs. I also enjoy LEGO and hanging out with my fiance and my cats!',
		'jobs'=>[
			'LEGO LBR Brick Specialist'=>[
				'company'=>'LEGO',
				'start'=>'2021',
				'end'=>'Present',
				'description'=>'Worked with customers enjoying the LEGO toy company, interactin with guests to provide a well thought-out expirence',
			],
			'GE - General Appliances Sales Represenative'=>[
				'company'=>'GE',
				'start'=>'2019',
				'end'=>'2021',
				'description'=>'Worked with customers selling appliances and helping people find the right tools for working efficiency.',
			],
		],
	],
];


$page = $members[$_GET['id']];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $page['firstN'].' '.$page['lastN'];?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page['firstN'].' '.$page['lastN'];?>'s resume">
    <meta name="author" content="<?php echo $page['firstN'].' '.$page['lastN'];?>">    
    <link rel="shortcut icon" href="<?php echo $page['favicon']; ?>"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src='<?php echo $page['profile']?>' alt="Picture of <?php echo $page['firstN']?>">
				    </div>
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $page['firstN'].' '.$page['lastN'];?></h1>
							    <div class="title mb-3"><?php echo $page['jobTitle'];?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto: <?php echo $page['socials']['email'];?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $page['socials']['email'];?></a></li>
								    <li><a class="text-link" href="tel:<?php echo $page['socials']['phone'];?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $page['socials']['phone'];?></a></li>
							    </ul>
						    </div>
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="https://<?php echo $page['socials']['linkedin'];?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $page['socials']['linkedin'];?></a></li>
					                <li class="mb-3"><a class="text-link" href="https://<?php echo $page['socials']['github'];?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $page['socials']['github'];?></a></li>
					                <li><a class="text-link" href="https://<?php echo $page['socials']['website'];?>" target="_blank"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $page['socials']['website'];?></a></li>
							    </ul>
						    </div>
					    </div>
				    </div>
			    </div>
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $page['summary'];?></p>
				    </div>
			    </section>
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								<?php foreach($page['jobs'] as $jobTitle => $jobDetails){
								echo '<article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">'.$jobTitle.'</h3>
										        <div class="resume-company-name ms-auto">'.$jobDetails['company'].'</div>
										    </div><!--//row-->
										    <div class="resume-position-time">'.$jobDetails['start'].' - '.$jobDetails['end'].'</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>'.$jobDetails['description'].'</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <ul>';
											foreach($jobDetails['achievements'] as $achievement){
												echo '<li>'.$achievement.'</li>';
											};
											echo '</ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">';
											foreach($jobDetails['skills'] as $skill){
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">'.$skill.'</span></li>';
											}
										    echo '</ul>
									    </div>
								    </article>';};?>
							    </div>
						    </div>
					    </section>
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
									<?php foreach($page['proSkills'] as $skill => $skillData){
										echo '<li class="mb-2">
								            <div class="resume-skill-name">'.$skill.'</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: '.$skillData['progress'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>';};?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
										<?php foreach($page['otherSkills'] as $skill){
							            echo '<li class="list-inline-item"><span class="badge badge-light">'.$skill.'</span></li>';
										};?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
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
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by 
            <?php $i = 0;
                foreach($members as $member){
                echo $member['firstN'].' '.$member['lastN'];
                if($i+1!==count($members)) echo ' & ';
                $i++;
            };?>
        </small>
    </footer>

    

</body>
</html> 

