

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to_email = $email ;
        $subject = "Enquiry";

        $body = "<h1>Dear ".$name.",</h1>".
        " enquiry for today in ".$message." Our team will contact you shortly...";
        $headers = "From: no-reply@sakrdprojects.com\r\nContent-Type: text/html; charset=UTF-8\r\n";

        if (mail($to_email, $subject, $body, $headers))

        {
            
        // $to_email = "info@sakrdprojects.com" ;
         $to_email = "mdabdulafroz1@gmail.com" ;
        $subject = "Enquiry";

    
        $body = "<h1>You get an enquiry</h1> From ".$name." his email ".$email." , message is ".$message;
        $headers = "From: no-reply@sakrdprojects.com\r\nContent-Type: text/html; charset=UTF-8\r\n";

        mail($to_email, $subject, $body, $headers);
        }

        else

        {
            echo "Email sending failed!";
            
        }
        
    
    echo "<script>window.location.href='https://iamcustomdeveloper.github.io/dist/?sent=success#contacts';</script>";
    // header("Location: https://sakrdprojects.com/new_draft/?sent=success#contacts");
    
}
?>