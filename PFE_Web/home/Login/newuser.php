<?php
    session_start();
    $user = "root";
    $password = "";
    if(isset($_POST['send2'])){
        if(isset($_POST['username2'])and isset($_POST['email2'])and isset($_POST['password2'])){
            $username = $_POST['username2'];
            $email = $_POST['email2'];
            $userpassword = $_POST['password2'];
            try{
                $PDO = new PDO("mysql: host = localhost; dbname=stats; charset = UTF8;",$user,$password);
                 $requet= $PDO->query("select max(id) from users");
                 $data = $requet->fetchAll();
                 foreach( $data as $line){
                    $maxid = $line["max(id)"];                    
                 }   
                 
                 $_SESSION['username'] = $_POST['username2'];
                 $_SESSION['email'] = $_POST['email2'];
                 $_SESSION['id'] = $maxid+1;
                 $date = date('d/m/y | h:i A');
                $query = "insert into users  values($maxid+1,'$username','$email','$userpassword' , '$date' , 1 ,'$date' )";
                if($PDO->query($query)){
                    header("Location: ../../user-interface/home-user/index.php");
                }else{
                    header("Location: index.html");
                }
            }catch(PDOException $e){
                echo "cannot connect to database";
            }        
        }
    }
?>