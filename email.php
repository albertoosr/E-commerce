
<?php

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $subject = "Information request";
    $message = "The user".$_POST['name']."Has requested information, your phone number is: ".$_POST['phone']."Information: ".$_POST['description'];
    $email = $_POST['email'];
    $header = "From: ecommerce@gmail.com"."\r\n";
    $header .= "Reply-To: ecommerce@gmail.com"."\r\n";
    $header .= "X-Mailer: PHP/". phpversion();

    if(mail($email,$subject,$message,$header)){
        header('Location: contac.php?status=send');
    } else{
        header('Location: contac.php?status=error');
    }

} else{

    header('Location: contac.php?status=false');
}
?>