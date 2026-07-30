<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim(substr($_POST['name'] ?? '', 0, 50)));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $mobile = preg_replace('/\D/', '', $_POST['mobile'] ?? '');
    $subject = htmlspecialchars(trim(substr($_POST['subject'] ?? '', 0, 100)));
    $message = htmlspecialchars(trim(substr($_POST['message'] ?? '', 0, 1000)));

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
                <td><strong>Mobile</strong></td>
                <td>$mobile</td>
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

    $fromEmail = "no-reply@chaitrakonnex.com";
    $fromName = "Chaitra Konnex Website";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: $fromName <$fromEmail>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailSent = @mail($to, $mail_subject, $mail_message, $headers);

    if ($mailSent) {
        header('Location: contact.php?status=success&message=' . urlencode('Thank you! Your message has been sent successfully.'));
        exit;
    } else {
        $mailError = error_get_last();
        if (is_array($mailError) && isset($mailError['message'])) {
            error_log('Contact form mail failed: ' . $mailError['message']);
        } else {
            error_log('Contact form mail failed: unknown mail() error');
        }
        header('Location: contact.php?status=error&message=' . urlencode('Mail could not be sent. Server mail service is unavailable or not configured.'));
        exit;
    }

}

header('Location: contact.php');
exit;
?>
