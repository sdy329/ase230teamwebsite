<?php
$members=[
    'spencer'=>[
        'firstN'=>'Spencer',
        'lastN'=>'Yates',
        'role'=>'',
        'dateOfBirth' => '2001-03-29',
        'profile'=>'.\\assets\\img\\SY\\profile.png',
    ],
    'andrey'=>[
        'firstN'=>'Andrey',
        'lastN'=>'Owen',
        'role'=>'',
        'dateOfBirth' => '2002-07-22',
        'profile'=>'.\\assets\\img\\AO\\Icon.jpg',
    ]
];

function calculateAge($dateOfBirth) {
    $birthDate = new DateTime($dateOfBirth);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;
    return $age;
}


?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
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
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
            <?php
            foreach($members as $id => $member){
                echo '
		        <header class="resume-header pt-4 pt-md-0">
			        <div class="row">
				        <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				            <img class="picture" src='.$member['profile'].' alt="">
				        </div>
				        <div class="col">
					        <div class="row p-4 justify-content-center justify-content-md-between">
						        <div class="primary-info col-auto">
							        <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">'.$member['firstN'].' '.$member['lastN'].'</h1>
							        <div class="title mb-3">Age: ' . calculateAge($member['dateOfBirth']) . ' years</div>
                                    <div class="title mb-3">'.$member['role'].'</div>
								    <a href="detail.php?id='.$id.'" class="btn btn-secondary">See full profile</a>
						        </div>
						        <div class="secondary-info col-auto mt-2">
						        </div>
					        </div>
				        </div>
			        </div>
		        </header>';
            }
            ?>
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
