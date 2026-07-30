<?php

ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '0');

/**
 * Detect whether this request came from the fetch()-based AJAX contact form.
 */
function isAjaxRequest() {
    return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
        || (!empty($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);
}

/**
 * Respond to the form submission. AJAX requests get an immediate JSON
 * body (no reload). Regular (no-JS) submissions get redirected back to
 * contact.php with a status/message query string, falling back to a
 * meta-refresh/JS redirect if headers were already sent, so the user
 * never sees a blank page.
 */
function respond($status, $message) {
    ob_end_clean();

    if (isAjaxRequest()) {
        header('Content-Type: application/json');
        echo json_encode(['status' => $status, 'message' => $message]);
        exit;
    }

    $url = 'contact.php?status=' . urlencode($status) . '&message=' . urlencode($message);

    if (!headers_sent()) {
        header('Location: ' . $url);
        exit;
    }

    echo '<!DOCTYPE html><html><head><meta charset="UTF-8">';
    echo '<meta http-equiv="refresh" content="0;url=' . htmlspecialchars($url) . '">';
    echo '<script>window.location.replace(' . json_encode($url) . ');</script>';
    echo '</head><body>Redirecting...</body></html>';
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim(substr($_POST['name'] ?? '', 0, 50)));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $mobile = preg_replace('/\D/', '', $_POST['mobile'] ?? '');
    $subject = htmlspecialchars(trim(substr($_POST['subject'] ?? '', 0, 100)));
    $message = htmlspecialchars(trim(substr($_POST['message'] ?? '', 0, 1000)));

    if ($name === '' || !preg_match('/^[A-Za-z\s]+$/', $name)) {
        respond('error', 'Please enter a valid name (letters only).');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        respond('error', 'Please enter a valid email address.');
    }

    if (strlen($mobile) !== 10) {
        respond('error', 'Please enter a valid 10 digit mobile number.');
    }

    if ($subject === '') {
        respond('error', 'Please enter a subject.');
    }

    if ($message === '') {
        respond('error', 'Please enter your message.');
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
        respond('success', 'Thank you! Your message has been sent successfully.');
    } else {
        $mailError = error_get_last();
        if (is_array($mailError) && isset($mailError['message'])) {
            error_log('Contact form mail failed: ' . $mailError['message']);
        } else {
            error_log('Contact form mail failed: unknown mail() error');
        }
        respond('error', 'Mail could not be sent. Server mail service is unavailable or not configured.');
    }

}

respond('error', 'Invalid request.');
?>
