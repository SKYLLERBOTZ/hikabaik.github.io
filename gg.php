<?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tb_guru");
        while ($row = mysqli_fetch_array($data)) {

// Cek apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// 2. Tentukan id yang ingin ditampilkan
$id = 2; // Gantilah dengan id yang ingin Anda cari

// 3. Tulis query SQL untuk mengambil data berdasarkan id
$query = "SELECT * FROM tb_guru WHERE id = $id";

// 4. Jalankan query
$result = $koneksi->query($query);

// 5. Ambil dan tampilkan data
if ($result->num_rows > 0) {
    // Mengambil data dari hasil query
    $row = $result->fetch_assoc();
    echo "ID: " . $row['id'] . "<br>";
    echo "Nama: " . $row['nama'] . "<br>";
} else {
    echo "Data tidak ditemukan";
}

// 6. Tutup koneksi
$koneksi->close();
