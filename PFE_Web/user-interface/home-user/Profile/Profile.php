<!DOCTYPE html>
<html>
<head>
	<title>Profile Card</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body class="bg-light">
	<div class="container">
     	<div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
             	<div class="row z-depth-3">
                 	<div class="col-sm-4 bg-info rounded-left">
        		        <div class="card-block text-center text-white">
						<a href="../index.php" ><img src="img/retour.png" alt="retour" style="float:left;padding:5px;font-size:40px;"></a>
                		    <i class="fas fa-user-tie fa-7x mt-5"></i>
                    		<h2 class="font-weight-bold mt-4">
								<?php
									$user = "root"; 
									$password = "";
									session_start();
									$username = $_SESSION['username'];
									echo $username;
								?>
							</h2>
                    		<p>Profil</p><!--<i class="far fa-edit fa-2x mb-4"></i>-->
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h3 class="mt-3 text-center">Information</h3>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email :</p>
                           		<h6 class=" text-muted" style="text-align:center;"><?php
									$email = $_SESSION['email'];
									echo $email;
								?></h6>
                        	</div>
                    	</div>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Date of registration : </p>
                          	  	<h6 class="text-muted" style="text-align:center";>
									<?php
									$user = "root"; 
									$password = "";
									$date_registration = $_SESSION['date_registration'];
									echo $date_registration;
								?>	
								</h6>
                        	</div>
                        	
                    	</div>
                	   	<hr class="bg-primary">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
            	        	<li><a href="#!"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
        	            	<li><a href="#!"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
    	                	<li><a href="#!"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
	</div>
</body>
</html>

