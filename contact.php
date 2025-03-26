<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subjek = htmlspecialchars($_POST["subjek"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    $to = "2310631170085@student.unsika.ac.id";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Nama: $nama\n";
    $body .= "Email: $email\n";
    $body .= "Subjek: $subjek\n\n";
    $body .= "Pesan:\n$pesan\n";

    if (mail($to, $subjek, $body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Pesan gagal dikirim. Silakan coba lagi.'); window.location.href='contact.html';</script>";
    }
} else {
    echo "<script>alert('Akses ditolak!'); window.location.href='contact.html';</script>";
}

header("Location:KontakUts.html");
?>
