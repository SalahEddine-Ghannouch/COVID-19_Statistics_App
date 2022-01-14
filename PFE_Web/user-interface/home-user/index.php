<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <title>Stats in Second</title>
    <script src="jquery-1.12.4.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <!-- navbar  -->
    <nav>
        <ul>
            <div class="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="index.php"><li><img class="menuicon" src="images/icon/home.png">HOME</li></a>
            <a href="COVID-19/index.html"><li><img class="menuicon" src="images/icon/coronavirus.png" >CORONAVIRUS </li></a>
            <a href="countries_informations/index.html"><li><img class="menuicon" src="images/icon/contry.png" >COUNTRIES</li></a>
            <a href="Contact/index.html"><li><img class="menuicon" src="images/icon/contact-us.png" >CONTACT US</li></a>
        </ul>
        
    </nav>


    <!-- navbar end  -->
  
</header>
    <script src="main.js" ></script>
    <div class="counter-up">
        <div class="content">
          <div class="box">
            <div class="icon"><img src="images/icon/new.png" alt=""></div>
            <div class="counter" id="NewConfirmed"></div>
            <div class="text">New Confirmed</div>
          </div>
          <div class="box">
            <div class="icon"><img src="images/icon/corona.png" alt=""></div>
            <div class="counter" id="TotalConfirmed"></div>
            <div class="text">Total Confirmed</div>
          </div>
          <div class="box">
            <div class="icon"><img src="images/icon/deaths.png" alt=""></div>
            <div class="counter" id="TotalDeaths"></div>
            <div class="text">Total Deaths</div>
          </div>
          <div class="box">
            <div class="icon"><img src="images/icon/recorved.png" alt=""></div>
            <div class="counter" id="TotalRecovered"></div>
            <div class="text">Total Recovered</div>
          </div>
        </div>
      </div>

            <!-- start  account   -->
    <div class="wrapper">
      <div class="navbar">
          <div class="left">
             
          </div>
          <div class="right">
              <ul>
                <li>
                  <a href="#">
                    <img src="images/icon/user.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                  </a>
                   
                  <div class="dropdown">
                      <div class="username">
                        <?php 
                         session_start();
                         echo $_SESSION['username']."<br><div class='email'>".$_SESSION['email']."</div>";
                         ?>
                         </div>
                      <ul>
                        <li class="account_user"><a href="Profile/Profile.php"><i class="fas fa-user" ></i>Profile</a></li>
                        <li class="account_user"><a href="../../home/Login/index.html"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
                    </ul>
                  </div>
                  
                </li>
            </ul>
          </div>
      </div>
  </div>	
  
  <script>
    document.querySelector(".right ul li").addEventListener("click", function(){
        this.classList.toggle("active");
    });
  </script>
  <!-- account end  -->
</body>
</html>