<?php
include 'service/database.php';

$register_message = '';



if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Hapus output debug di produksi
    // echo $username;
    // echo $password;

    $sql = "INSERT INTO username (username, password) VALUES ('$username', '$password')";
    if ($db->query($sql)) {
        $register_message = "akun ditemukan";
    } else {
        $register_message =  "aku tidak ditemukan silahkan login ulang! " . $sql . "<br>" . $db->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <?php include 'layout/header.html'; ?>
    <h2>Daftar Akun</h2>
    <i> <?=$register_message?> </i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="write here" id="username" name="username">
        <input type="password" placeholder="write here" id="password" name="password">
        <button type="submit" name="register">Register</button>
    </form>
    <?php include 'layout/footer.html'; ?>
</body>

</html>