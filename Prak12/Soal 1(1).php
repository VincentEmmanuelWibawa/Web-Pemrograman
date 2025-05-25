<?php
session_start();

$name = trim($_POST['name'] ?? '');
$position = $_POST['position'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

$errors = [];

if (empty($name)) $errors[] = "Input Nama belum di isi!";
if (empty($password)) $errors[] = "Input Password belum di isi!";
if (empty($confirmPassword)) $errors[] = "Input Confirm Password belum di isi!";
if ($password && $confirmPassword && $password !== $confirmPassword) {
    $errors[] = "Password dan Confirm Password belum sama!";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = [
        'name' => $name,
        'position' => $position,
    ];
    header("Location: form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>2373023_Vincent Emmanuel</title>
  <style>
    .result { margin-top: 20px; }
  </style>
</head>
<body>

<div class="result">
  <div style="background-color:#ccc; padding:5px;">Data yang Anda Masukkan!</div>
  <p>Name : <?= htmlspecialchars($name) ?></p>
  <p>Position : <?= htmlspecialchars($position) ?></p>
  <a href="Soal 1.php">back</a>
</div>

</body>
</html>
