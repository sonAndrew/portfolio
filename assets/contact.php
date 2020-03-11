<?php 
    // create short variable names
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $company=$_POST['company'];
    $email=$_POST['email'];
    $message=$_POST['message'];
?>
<?php
    // set up some static information
    $toAddress   =  "andrewz.jackson667@gmail.com";
    $subject     =  "Message from website";
    $mailContent =  "Customer first name: ".filter_var($fname)."\n".
                    "Customer last name: ".filter_var($lname)."\n".
                    "Customer company: ".filter_var($company)."\n".
                    "Customer email: ".$email."\n".
                    "Customer comments:\n".$message."\n";
    $fromAddress =  "From: andrewzos@example.com";
?>
<?php
    // invoke mail() function to send mail
    mail($toAddress, $subject, $mailContent, $fromAddress);
?>
<p>Congrats your message has been sent.</p>
<p>I cant wait to speak you with you.</p>
