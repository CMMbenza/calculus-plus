<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sécurisation des données
    function clean($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    $name = clean($_POST['name'] ?? '');
    $email = clean($_POST['email'] ?? '');
    $subject = clean($_POST['subject'] ?? '');
    $message = clean($_POST['message'] ?? '');

    // Vérification
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email invalide.";
        exit;
    }

    // Email destinataire
    $to = "contact@calculusplus.com";

    // Sujet
    $email_subject = "Nouveau message de $name : $subject";

    // Contenu du message
    $email_body = "Vous avez reçu un nouveau message depuis votre site :\n\n";
    $email_body .= "Nom : $name\n";
    $email_body .= "Email : $email\n";
    $email_body .= "Sujet : $subject\n\n";
    $email_body .= "Message :\n$message\n";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>