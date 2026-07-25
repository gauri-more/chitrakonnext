<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
   $mobile = htmlspecialchars($_POST['mobile']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Change this to your email
    $to = "Chaitrakt.marketing@gmail.com";

    $mail_subject = "Website Contact Form - " . $subject;

    $mail_message = "
    <html>
    <head>
        <title>Contact Form</title>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>

        <table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <td><strong>Name</strong></td>
                <td>$name</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>$email</td>
            </tr>
            <tr>
                <td><strong>Website</strong></td>
                <td>$website</td>
            </tr>
            <tr>
                <td><strong>Subject</strong></td>
                <td>$subject</td>
            </tr>
            <tr>
                <td><strong>Message</strong></td>
                <td>$message</td>
            </tr>
        </table>
    </body>
    </html>";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Website Contact <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $mail_subject, $mail_message, $headers)){
        echo "<script>
                alert('Thank you! Your message has been sent.');
                window.location.href='contact.php';
              </script>";
    } else {
        echo "<script>
                alert('Mail could not be sent.');
                window.history.back();
              </script>";
    }

}
?>