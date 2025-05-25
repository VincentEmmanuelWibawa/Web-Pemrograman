<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$isLoginValid = ($username === 'admin' && $password === 'admin');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>2373023_Vincent Emmanuel</title>
</head>
<body>

<?php if ($isLoginValid): ?>
  <h2>Login berhasil!</h2>
  <p>Selamat datang, <span style="color: blue; font-weight: bold;">admin</span>.</p>
<?php else: ?>
  <h2 style="color: red;">Login gagal!</h2>
  <p>Username atau password salah.</p>
<?php endif; ?>

<br>
<a href="Soal 2.php">kembali ke halaman login</a>

</body>
</html>
