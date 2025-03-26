<?php
// header.php
function renderHeader($title) {
    echo "<!DOCTYPE html>";
    echo "<html lang='id'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>$title</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<header>";
    echo "<nav><ul>";
    echo "<li><a href='index.php'>Home</a></li>";
    echo "<li><a href='about.php'>About Me</a></li>";
    echo "<li><a href='#web'>Pemrograman Web</a></li>";
    echo "<li><a href='contact.php'>Kontak</a></li>";
    echo "</ul></nav>";
    echo "</header>";
}

// footer.php
function renderFooter() {
    echo "<footer>";
    echo "<p>&copy; 2025 Website Personal.</p>";
    echo "<p>Dibuat oleh Fitria Hidayanti</p>";
    echo "</footer>";
    echo "<script src='script1.js'></script>";
    echo "</body></html>";
}

// index.php
include 'header.php';
renderHeader('Home - Website Personal');
?>

<section id='home'>
    <h1>Selamat Datang di Website Saya</h1>
    <img src='Home.jpg' alt='Foto Profil' class='profile-img'>
    <p>Halo! Saya Fitria Hidayanti, seorang mahasiswa yang tertarik dengan dunia pemrograman web.
       Di website ini, saya berbagi pengalaman, proyek, dan pembelajaran saya tentang teknologi web.</p>
    <p><strong>Keahlian:</strong> HTML, CSS, JavaScript, PHP</p>
    <p><strong>Pengalaman:</strong> Membuat beberapa proyek web dan mengikuti kursus pemrograman.</p>
</section>

<?php
renderFooter();
?>
