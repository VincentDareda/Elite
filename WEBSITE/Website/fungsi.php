<?php
$host = "	sql303.infinityfree.com"; // Ganti dengan host database Anda
$user = "	if0_34417322"; // Ganti dengan username database Anda
$password = "iJYwYx5LG4wUNe"; // Ganti dengan password database Anda
$database = "if0_34417322_tugas"; // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $nomorHP = $_POST["nomor_hp"];
  $message = $_POST["Pesan"];

  // Pengecekan format email menggunakan fungsi filter_var()
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Redirect ke homepage.php dengan parameter error
    header("Location: homepage.php?error=Format email tidak valid.");
    exit;
  }

  $sql = "INSERT INTO contacts (Nama, Email, `Nomor HP`, `Pesan`) VALUES ('$nama', '$email', '$nomorHP', '$message')";

  if ($conn->query($sql) === TRUE) {
    // Redirect ke homepage.php dengan parameter success
    header("Location: homepage.php?success=Data berhasil disimpan.");
    exit;
  } else {
    // Redirect ke homepage.php dengan parameter error
    header("Location: homepage.php?error=Terjadi kesalahan: " . $conn->error);
    exit;
  }
}

$conn->close();
?>
