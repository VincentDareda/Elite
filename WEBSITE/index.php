<?php
session_start();

// Fungsi untuk membuat koneksi ke database
function createConnection() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "tugas";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  return $conn;
}

// Fungsi untuk memeriksa login pengguna
function checkLogin($email, $password) {
  $conn = createConnection();

  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    if (password_verify($password, $hashed_password)) {
      $conn->close();
      return true; // Login berhasil
    }
  }

  $conn->close();
  return false; // Login gagal
}

// Fungsi untuk menambahkan pengguna baru ke database
function addUser($username, $password, $email) {
  $conn = createConnection();

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $hashed_password, $email);
  $stmt->execute();

  $conn->close();
}

// Proses login
if (isset($_POST['login_submit'])) {
  $login_email = $_POST['login_email'];
  $login_password = $_POST['login_password'];

  if (checkLogin($login_email, $login_password)) {
    $_SESSION['login'] = true;
    header("Location: Website/homepage.php");
    exit();
  } else {
    echo "<script>alert('Login gagal!');</script>";
  }
}

// Proses registrasi
if (isset($_POST['register_submit'])) {
  $register_username = $_POST['register_username'];
  $register_password = $_POST['register_password'];
  $register_email = $_POST['register_email'];

  addUser($register_username, $register_password, $register_email);
  echo "<script>alert('Registrasi berhasil!'); window.location.href = 'login.php';</script>";
  exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Register</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<div class="wrapper">
  <div class="form-box login">
    <h2>Login</h2>
    <form action="#" method="post">
      <div class="input-box">
        <input type="email" name="login_email" required>
        <label>Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="login_password" required>
        <label>Password</label>
      </div>
      
      <button type="submit" class="btn" name="login_submit">Login</button>
      <div class="login-register">
        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
      </div>
    </form>
  </div>

  <div class="form-box register">
    <h2>Registration</h2>
    <form action="#" method="post">
      <div class="input-box">
        <input type="text" name="register_username" required>
        <label>Username</label>
      </div>
      <div class="input-box">
        <input type="password" name="register_password" required>
        <label>Password</label>
      </div>
      <div class="input-box">
        <input type="email" name="register_email" required>
        <label>Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="register_confirm_password" required>
        <label>Confirm Password</label>
      </div>
      <button type="submit" class="btn" name="register_submit">Register</button>
      <div class="login-register">
        <p>Already have an account? <a href="" class="register-link">Login</a></p>
      </div>
    </form>
  </div>
</div>

</body>
<script src="fungsi.js"></script>
</html>
