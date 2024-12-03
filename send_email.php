<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "1daoud28@gmail.com"; // Deine E-Mail-Adresse
    $subject = "Neue Nachricht von deiner Webseite";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $email_body = "Du hast eine neue Nachricht von $name.\n\n";
    $email_body .= "E-Mail: $email\n\n";
    $email_body .= "Nachricht:\n$message\n";

    // E-Mail senden
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Vielen Dank! Deine Nachricht wurde erfolgreich gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden deiner Nachricht. Bitte versuche es später erneut.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
