<?php
// Koneksi ke database MySQL
$host = 'localhost'; // Ganti dengan host database Anda
$user = 'root'; // Ganti dengan pengguna database Anda
$password = ""; // Ganti dengan password database Anda
$database = 'sertikombaru_db'; // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

    $namaPemesan = $_POST["namaPemesan"];
    $nomorIdentitas = $_POST["nomorIdentitas"];
    $jenisKelamin = $_POST["jenisKelamin"];
    $tipeKamar = $_POST["tipeKamar"];
    $harga = $_POST["harga"];
    $tanggalPesan = $_POST["tanggalPesan"];
    $durasiMenginap = $_POST["durasiMenginap"];
    $termasukBreakfast = isset($_POST["termasukBreakfast"]) ? "Ya" : "Tidak";
    $totalBayar = $_POST["totalBayar"];



    $sql = "INSERT INTO booking_order (nama, jenis_kelamin, identitas, tipe_kamar, harga, tanggal_pesan, durasi_menginap, breakfast, total_bayar)
            VALUES ('$namaPemesan', '$jenisKelamin', '$nomorIdentitas', '$tipeKamar', '$harga', '$tanggalPesan', '$durasiMenginap', '$termasukBreakfast', '$totalBayar')";

    if ($conn->query($sql) === TRUE) {
        echo "Nama Pemesan : " . $namaPemesan . "<br>";
        echo "Jenis Kelamin : " . $jenisKelamin . "<br>";
        echo "Nomor Identitas : " . $nomorIdentitas . "<br>";
        echo "Tipe Kamar : " . $tipeKamar . "<br>";
        echo "Tanggal Pesan : " . $tanggalPesan . "<br>";
        echo "Durasi Menginap : " . $durasiMenginap . " Hari <br>";
        echo "Termasuk Breakfast : " . ($termasukBreakfast ? "Ya" : "Tidak") . "<br>";

        $totalBayar = $harga * $durasiMenginap;
        if ($durasiMenginap > 3) {
        $diskon = 0.1 * $totalBayar; // 10% diskon
        $totalBayar -= $diskon;
        echo "Diskon 10% : " . $diskon . "<br>";
        }

        echo "Total Bayar: " . $totalBayar . "<br><br>";
        echo "Pemesanan berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // $gambar = ''; // Inisialisasi variabel gambar

    // // Menentukan gambar berdasarkan tipe kamar
    // if ($tipeKamar == 'Standard') {
    //     $gambar = './img/executive/executive1.webp'; // Ganti dengan nama file gambar yang sesuai
    // } elseif ($tipeKamar == 'Deluxe') {
    //     $gambar = './img/executive/executive1.webp'; // Ganti dengan nama file gambar yang sesuai
    // } elseif ($tipeKamar == 'Suite') {
    //     $gambar = './img/executive/executive1.webp'; // Ganti dengan nama file gambar yang sesuai
    // }
    
    // // Menampilkan gambar
    // if (!empty($gambar)) {
    //     echo '<img src="./img' . $gambar . '" alt="' . $tipeKamar . '">';
    // }

$conn->close(); // Menutup koneksi database
?>