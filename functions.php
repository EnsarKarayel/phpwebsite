<?php
function sendNotification($email, $subject, $message) {
    // Ensar, buraya kendi mail gönderim fonksiyonunu ekle
    mail($email, $subject, $message);
}
?>
