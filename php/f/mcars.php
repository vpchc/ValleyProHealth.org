<?php

require_once("../PHPMailer/class.phpmailer.php");
require_once('../PHPMailer/PHPMailerAutoload.php');

    //Create a new PHPMailer instance
    $mail = new PHPMailer;


    if(!file_exists($_FILES['resume']['tmp_name']) || 
       !is_uploaded_file($_FILES['resume']['tmp_name'])) {
        echo 'No r&egrave;sum&egrave; attached.';
        exit;
    }
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $fullname = $firstname . ' ' . $lastname;
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $filename = basename($_FILES['resume']['name']);
    $filetype = substr($filename, 
                strrpos($filename, '.') + 1);
    $filesize = $_FILES["resume"]["size"]/1048576;

    //Honeypot used to catch spam bots
     if ($_POST["address"] != "") {
        echo "SPAM HONEYPOT";
        exit;
    }

    //Checks for injection
    $email = preg_replace("([\r\n])", "", $email);
    $find = "/(content-type|bcc:|cc:)/i";
    if (preg_match($find, $fullname) || preg_match($find, $email) || preg_match($find, $url) || preg_match($find, $subject)) {
       echo "<h1>Error</h1>\n
          <p>No meta/header injections, please.</p>";
       exit;
    }
    
    //Test for valid inputs
    if(!preg_match("/^[a-zA-Z ]*$/", $firstname) || (empty($firstname))){
        echo 'Invalid first name.';
        exit;
    }
    if(!preg_match("/^[a-zA-Z ]*$/", $lastname) || (empty($lastname))){
        echo 'Invalid last name.';
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.'; 
        exit;
    }
    if(!($filetype == 'doc' || $filetype == 'docx' || $filetype == 'odt' || $filetype == 'pdf')){
        echo 'Invalid file format.'; 
        die();
    }
    if($filesize > 5){
        echo 'Invalid file size.'; 
        exit;
    }

    $mail->Host = 'smtp.gmail.com';
    //Set who the message is to be sent from
    $sendemail = 'vpchcenter@gmail.com';
    $mail->setFrom($sendemail, 'Online Application');
    //Set who the message is to be sent to
    $mail->addAddress('bwebster@vpchc.org', 'Brice Webster');
    //Set the subject line
    $mail->Subject = $subject;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $jobmessage = 'Tiffani, </br> You have an applicant for the position' . ' ' . $subject . ' ' . ' whose name is' . ' ' . $fullname . ' ' . 'and email is' . ' ' . $email . '.</br></br>' . 'This is an automated message. Do not reply.';
    $mail->msgHTML($jobmessage);
    //Attach an image file
    $mail->addAttachment( $_FILES['resume']['tmp_name'], $_FILES['resume']['name'] );

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Application sent!";
    }
?>