<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim(substr($_POST['name'] ?? '', 0, 50)));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $mobile = preg_replace('/\D/', '', $_POST['mobile'] ?? '');
    $subject = htmlspecialchars(trim(substr($_POST['subject'] ?? '', 0, 100)));
    $message = htmlspecialchars(trim(substr($_POST['message'] ?? '', 0, 1000)));
    $website = htmlspecialchars($_POST['website'] ?? '');

    if ($name === '' || !preg_match('/^[A-Za-z\s]+$/', $name)) {
        header('Location: contact.php?status=error&message=' . urlencode('Please enter a valid name (letters only).'));
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact.php?status=error&message=' . urlencode('Please enter a valid email address.'));
        exit;
    }

    if (strlen($mobile) !== 10) {
        header('Location: contact.php?status=error&message=' . urlencode('Please enter a valid 10 digit mobile number.'));
        exit;
    }

    if ($subject === '') {
        header('Location: contact.php?status=error&message=' . urlencode('Please enter a subject.'));
        exit;
    }

    if ($message === '') {
        header('Location: contact.php?status=error&message=' . urlencode('Please enter your message.'));
        exit;
    }

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
        header('Location: contact.php?status=success&message=' . urlencode('Thank you! Your message has been sent successfully.'));
        exit;
    } else {
        header('Location: contact.php?status=error&message=' . urlencode('Mail could not be sent. Please try again later.'));
        exit;
    }

}
?>
