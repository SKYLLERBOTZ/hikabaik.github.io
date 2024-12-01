<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nisn = $_POST['nisn'];
    $orang_rekomendasi = $_POST['orang_rekomendasi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_sis";

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengecek apakah NISN sudah terdaftar di database
    $check = $conn->prepare("SELECT * FROM ppdb WHERE nisn = ?");
    $check->bind_param("s", $nisn);  // Menggunakan bind_param untuk mencegah SQL Injection
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        // Jika NISN sudah ada
        echo "<h3 style='color: red;'>Pendaftaran Gagal!</h3>";
        echo "<p>NISN <strong>$nisn</strong> sudah terdaftar. Silakan gunakan NISN lain atau hubungi admin.</p>";
        echo "<br><a href='daftar.php'><button>Kembali ke Formulir Pendaftaran</button></a>";
    } else {
        // Jika NISN belum terdaftar, lanjutkan dengan INSERT data
        $sql = $conn->prepare("INSERT INTO ppdb (nama, nisn, jenis_kelamin, tanggal_lahir, asal_sekolah, orang_rekomendasi, alamat, email, no_hp) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("sssssssss", $nama, $nisn, $jenis_kelamin, $tanggal_lahir, $asal_sekolah, $orang_rekomendasi, $alamat, $email, $no_hp);
        
        if ($sql->execute()) {
            echo "<h3 style='color: green;'>Pendaftaran Berhasil!</h3>";
            echo "<p>Terima kasih telah mendaftar, $nama.</p>";
            echo "<br><br><a href='index.php'><button>Kembali ke Halaman Utama</button></a>";
        } else {
            echo "<h3 style='color: red;'>Terjadi Kesalahan!</h3>";
            echo "Pesan Error: " . $conn->error;
        }
    }

    // Menutup koneksi
    $conn->close();

} else {
    echo "<h3 style='color: red;'>Formulir belum dikirim dengan benar.</h3>";
    echo "<p>Silakan lengkapi formulir dan kirim kembali.</p>";
}
?>
