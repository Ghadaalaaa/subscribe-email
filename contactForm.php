<?php
if ($_POST) {

 
    // if all informations are filled
    if (($_POST['name']) &  ($_POST['email'])&  ($_POST['subject']) & ($_POST['message'])) {
        
        // Your email address 
        $to = "info@syntrumsolutions.com";
        
        // Get name value
        $name = $_POST['name'];
        
        // Get email value
        $email = $_POST['email'];

        // Get subject value
        $subject = $_POST['subject'];
        
        // Get message text
        $message = $_POST['message'];
        
        // Email tile
        // if client name is Robert, title will be "Robert send you an email"
        $title = "$name send you an email"; 
        $mailText ="" ;
        // Email parameters
        $mailText .= "From: $name";
        $mailText .= "E-mail: $email";
        $mailText .= "Subject: $subject";
        $mailText .= "Message:\n";
        $mailText .= $message;
        
        // Set "From Header parameter"
        $headers = 'From:' . $email;
        
        // Send email
        $sendMail = mail($to, $title, $mailText, $headers);
        
        // If email is sucessful send
        if ($sendMail) {
            
            // Write sucessful message
            echo "<strong>$name</strong>, we recived your comment.";
            exit;
            
            // If email is NOT sucessful send
        } else {
            
            // Write  message
            echo "<strong>Error</strong>, please try again.";
            exit;
        }
        
        // If we dont have POST method
    } else {
        
        // Write message
        echo "<strong>Error</strong>, please try again.";
        exit;
    }
}

?>