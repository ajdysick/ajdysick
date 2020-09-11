<?php

  if (isset($_POST)['submit']) {

    // Contact Details
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phonenumber'];

    // Message Details
    $subject = $_POST['invitetoapply'];
    $subject = $_POST['resubmissionrequest'];
    $subject = $_POST['additional-references'];
    $subject = $_POST['resubmissionrequest'];
    $subject = $_POST['other'];
    $link = $_POST['relevantlink'];
    $message = $_POST['message'];

    $mailTo = "ajdysick@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$firstname.$lastname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.hmtl?mailsend");
  }

?>
