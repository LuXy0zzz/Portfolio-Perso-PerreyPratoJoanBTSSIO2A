<?php
/* A CONFIGURER PLUS TARD
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $to = "joanperrey71i@gmail.com"; // Remplace par ton adresse email
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

            $body = "Nom: $name\nEmail: $email\nObjet: $subject\n\nMessage:\n$message";

            if (mail($to, $subject, $body, $headers)) {
                echo "Votre message a été envoyé avec succès.";
            } else {
                echo "Une erreur est survenue lors de l'envoi.";
            }
        } else {
            echo "Adresse email invalide.";
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}
    */
?>
