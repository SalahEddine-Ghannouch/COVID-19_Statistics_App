<?php
    if(isset($_POST['username2'])and isset($_POST['email2'])){
        try{
            $PDO = new PDO("mysql: host = localhost; dbname=stats; charset = UTF8;",$user,$password);
            
            $query1 = "select  username from users where  id =1";
            $requet1= $PDO->query($query1);
            $data1 = $requet1->fetchAll();
            foreach($data1 as $line1){
                echo $line1['username'];
            }
            // *******************
            // $query = "select  email from users where  id =1";
            // $requet2= $PDO->query($query);
            // $data2 = $requet2->fetchAll();
            
            // foreach($data2 as $line2){
            //     echo $line2['email'];
            // }
        }catch(PDOException $e){
            echo "cannot connect to database";
        }       
    }
 ?>