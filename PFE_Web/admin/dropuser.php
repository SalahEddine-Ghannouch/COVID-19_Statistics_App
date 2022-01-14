<?php
    $user = "root";
    $password = "";
    if(isset($_POST['send'])){
        if(isset($_POST['userid'])){
            $userID = $_POST['userid'];
            try{
                $PDO = new PDO("mysql: host = localhost; dbname=stats; charset = UTF8;",$user,$password);
                $query = "DELETE FROM `users` WHERE id = $userID";
                if($PDO->query($query)){
                    header("Location: index.php");
                }else{
                    header("Location: index.html");
                }
            }catch(PDOException $e){
                echo "cannot connect to database";
            }        
        }
    }
?>