<?php

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $subject = "Information request";
    $message = "Information about your purchased Product: ".$_POST['product']
    ."Description: ".$_POST['description']
    ."Price: ".$_POST['price']."THANKS FOR YOUR PURCHASE";
    $email = $_POST['email'];
    $header = "From: ecommerce@gmail.com"."\r\n";
    $header .= "Reply-To: ecommerce@gmail.com"."\r\n";
    $header .= "X-Mailer: PHP/". phpversion();
    
    if(mail($email,$subject,$message,$header)){
        header('Location: information.php?id=0');
    } else{
        header('Location: information.php?id=9');
    }

} else{

    header('Location: information.php?id=10');
}
?>