<?php
    if(isset($_POST['send2'])){
        $password = "123";   
    $to_email = $_POST['email2'];
    $subject = 'Password Recovery';
    $message = 'Hi\n
    The definition of "stats" wishes you to be in better shape\n
    This is your password : '.$password;
    $headers = 'From: stats0052@gmail.com';
    mail($to_email,$subject,$message,$headers);
    }
?>