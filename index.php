<?php
$nama = "Harun Yahya Al Farisi Siregar";
$jenis_kelamin = "Laki-laki";
$tempat_lahir = "Sambirejo Timur";
$tanggal_lahir = "20 Februari 2010";
$alamat = "Jl. Makmur Psr 7 Tembung, Indonesia";
$status = "Pelajar";
$email = "donelonee@email.com";

$hobi = [
    "Main Bola",
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biodata Diri - <?php echo $nama; ?></title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <div class="header">
            <h1>BIODATA DIRI</h1>
            <p>Welcome to my personal profile 🚀</p>
        </div>

        <!-- PROFILE -->
        <div class="profile">

            <!-- KIRI -->
            <div class="profile-left">

                <img src="yahya.jpeg" class="profile-img" alt="Foto Profil">

                <h2>
                    <?php echo $nama; ?>
                </h2>

            </div>

            <!-- KANAN -->
            <div class="profile-right">

                <h2>
                    Halo, Saya
                    <span><?php echo $nama; ?></span> 
                </h2>

                <p>
                    Saya adalah seorang pelajar yang memiliki minat besar
                    dalam dunia teknologi, pemrograman, dan desain website.
                    Saya suka belajar hal baru dan terus mengembangkan skill
                    untuk menjadi lebih baik setiap harinya.
                </p>

                <!-- BIODATA -->
                <div class="biodata">

                    <div class="data-box">
                        <i class="bi bi-person-fill"></i>
                        <strong>Nama Lengkap</strong>
                        <p><?php echo $nama; ?></p>
                    </div>

                    <div class="data-box">
                        <i class="bi bi-gender-male"></i>
                        <strong>Jenis Kelamin</strong>
                        <p><?php echo $jenis_kelamin; ?></p>
                    </div>

                    <div class="data-box">
                        <i class="bi bi-calendar-event"></i>
                        <strong>Tempat, Tanggal Lahir</strong>
                        <p>
                            <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?>
                        </p>
                    </div>

                    <div class="data-box">
                        <i class="bi bi-geo-alt-fill"></i>
                        <strong>Alamat</strong>
                        <p><?php echo $alamat; ?></p>
                    </div>

                    <div class="data-box">
                        <i class="bi bi-mortarboard-fill"></i>
                        <strong>Status</strong>
                        <p><?php echo $status; ?></p>
                    </div>

                    <div class="data-box">
                        <i class="bi bi-envelope-fill"></i>
                        <strong>Email</strong>
                        <p><?php echo $email; ?></p>
                    </div>

                </div>

            <!-- SOCIAL -->
<div class="social">

    <!-- INSTAGRAM -->
    <a href="https://www.instagram.com/harunalfarisih_13" target="_blank">
        <i class="bi bi-instagram"></i>
    </a>

    <!-- WHATSAPP -->
    <a href="https://wa.me/6285792842375" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

</div>

        <!-- MY HOBBY FULL TENGAH -->
        <div class="hobby-section">

            <h3>
                <i class="bi bi-heart-fill"></i>
                My Hobby
            </h3>

            <div class="hobby">

                <?php foreach ($hobi as $hobi_saya) { ?>

                    <span>
                        <?php echo $hobi_saya; ?>
                    </span>

                <?php } ?>

            </div>

        </div>

        <!-- FOOTER -->
        <div class="footer">

            <p>
                © 2026
                <span><?php echo $nama; ?></span>
                | Made with ❤️ and Code
            </p>

        </div>

    </div>

</body>

</html>