<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "Anugrahmentari.perkasa@gmail.com"; // EMAIL TUJUAN
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Nama: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Pesan:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan.'); window.history.back();</script>";
    }
}
?>
