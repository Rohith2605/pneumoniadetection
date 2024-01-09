<?php 

if (isset($_POST['submit'])) {
    $to = $_POST['email']; 
    $subject = $_POST['subject'];
    $message = $_POST['message'];;
    $from = "zenphoto@example.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>