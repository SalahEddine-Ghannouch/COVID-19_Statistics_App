<?php
    session_start();
    $user = "root";
    $password = "";
    if(isset($_POST['send1'])){
        if(isset($_POST['email1'])and isset($_POST['password1'])){
            $email =  $_POST['email1'];
            // 
            $userpassword = $_POST['password1'] ;

            try{
                $PDO = new PDO("mysql: host = localhost; dbname=stats; charset = UTF8;",$user,$password);
                 $requet= $PDO->query("select password, username,date_registration  from users where email like '$email'");
                 $data = $requet->fetchAll();  
                foreach($data as $line){ 
                    $passwordfromdatabase = $line["password"];
                    $username = $line["username"];
                    $date_registration = $line["date_registration"];
                }
                $_SESSION['email'] = $_POST['email1'];
                $_SESSION['username'] = $username;
                $_SESSION['date_registration'] = $date_registration;
                if($passwordfromdatabase == $userpassword){
                    //nombre visite && last visit
                    $lastvisit = date('d/m/y | h:i A');
                    $PDO->query("update users set number_visits = number_visits+1 ,date_last_visit = '$lastvisit' where username like '$username' ");
                    //*********
                    header("Location: ../../user-interface/home-user/index.php");
                }
                else{
                    if($userpassword == "admin123" && $email == "admin@gmail.com"){
                        header("Location: ../../admin/index.php");
                    }
                    else {header("Location: index.html");}
                }
            }catch(PDOException $e){
                echo "cannot connect to database";
            }        
        }
    }
?>