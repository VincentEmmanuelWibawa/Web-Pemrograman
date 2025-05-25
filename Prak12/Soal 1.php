<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>2373023_Vincent Emmanuel</title>
  <style>
    table { border-collapse: collapse; width: 400px; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; }
    th { background-color: #aaa; font-size: 18px; text-align: center; }
    .error { color: red; margin-top: 10px; }
  </style>
</head>
<body>

<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? ['name' => '', 'position' => 'Senior Programmer'];
session_unset(); 
?>

<form method="post" action="Soal 1(1).php">
  <table>
    <tr><th colspan="2">Add profile</th></tr>
    <tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?= htmlspecialchars($old['name']) ?>"></td>
    </tr>
    <tr>
      <td>Position</td>
      <td>
        <select name="position">
          <optgroup label="Programmer">
            <option <?= $old['position'] == "Senior Programmer" ? "selected" : "" ?>>Senior Programmer</option>
            <option <?= $old['position'] == "Junior Programmer" ? "selected" : "" ?>>Junior Programmer</option>
          </optgroup>
          <optgroup label="System Analyst">
            <option <?= $old['position'] == "Senior Analyst" ? "selected" : "" ?>>Senior Analyst</option>
            <option <?= $old['position'] == "Junior Analyst" ? "selected" : "" ?>>Junior Analyst</option>
          </optgroup>
        </select>
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="confirmPassword"></td>
    </tr>
    <tr>
      <td colspan="2" align="right">
        <button type="reset">Reset</button>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>

<?php if (!empty($errors)): ?>
  <div class="error">
    <?php foreach ($errors as $e): ?>
      <?= htmlspecialchars($e) ?><br>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

</body>
</html>
