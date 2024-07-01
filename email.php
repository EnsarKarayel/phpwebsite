<?php
function sendMail($to, $subject, $message) {
    // Ensar, buraya kendi mail gönderim fonksiyonunu ekle
    $headers = 'From: no-reply@takibimdesin.com' . "\r\n" .
               'Reply-To: no-reply@takibimdesin.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
?>
