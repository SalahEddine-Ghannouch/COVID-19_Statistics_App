<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- <link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/> -->

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<img src="assets/logo.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/logo2.jpeg" alt="ATPro logo" class="logo logo-dark" style="border-radius: 50%;">
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
			<i class="fas fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="assets/tuat.jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a href="../home/Login/index.html" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link active">
					<div>
						<i class="fas fa-users"></i>
					</div>
					<span>Account management</span>
				</a>
			</li>
			
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Users accounts
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Username</th>
									<th>Email</th>
									<th>Date of registration</th>
									<th>The date of the last visit</th>
									<th>Number of visits</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$user = "root";
									$password = "";
									try{
										$PDO = new PDO("mysql: host = localhost; dbname=stats; charset = UTF8;",$user,$password);
										 $requet= $PDO->query("select * from users");
										 $data = $requet->fetchAll();
										   
										foreach($data as $line){ 
											echo "<tr>";
											echo "<td>".$line["id"]."</td>";
											echo "<td>".$line["username"]."</td>";
											echo "<td>".$line["email"]."</td>";
											echo "<td>".$line["date_registration"]."</td>";
											echo "<td>".$line["date_last_visit"]."</td>";
											echo "<td>".$line["number_visits"]." visits</td>";
											echo "</tr>";
										}
									}catch(PDOException $e){
										echo "cannot connect to database";
									}    
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-8 col-m-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h3>
								Delete User
							</h3>
							<i class="fas fa-ellipsis-h"></i>
						</div>
						<div class="card-content">
							<div class="dropuser">
								<form action="dropuser.php" method="POST" >  
									<center> <label class="text"> UserID </label><input class="input-id" type="number" name="userid" ><br>
									<input class="drop-btn" type="submit" name="send" value="Drop"></center>
								</form>
							</div>
						</div>
					</div>
			</div>
		
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>