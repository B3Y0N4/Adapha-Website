<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $headers = "From: chameridha06@gmail.com\r\n";
    $headers .= "Reply-To: chameridha06@gmail.com\r\n";
    $headers .= "CC: cc@example.com\r\n";
    $headers .= "BCC: bcc@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Message sent successfully.";
    } else {
        echo "An error occurred while sending the message.";
    }
}
?>
