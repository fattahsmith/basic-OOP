<?php
include 'service/database.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";

    $sql = "SELECT * FROM username WHERE username = '$username'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = $data = true;

        header("Location: dashbord.php");
    } else {
        $register_message = "akun tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <?php include 'layout/header.html'; ?>
    <i><? $register_message ?></i>
    <form action="" method="POST">
        <h2>Login Akun</h2>
        <img src="" alt="">
        <input type="text" placeholder="write here...." id="username" name="username">
        <input type="password" placeholder="write here..." id="password" name="password">
        <button type="submit" name="login">Login</button>
    </form>
    <?php include 'layout/footer.html'; ?>

    <style>
        body {
            background-image: url('layout/rm222-mind-16.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 500px;
            color: white;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            height: 150px;
        }

        ::placeholder {
            color: black;

        }

        form {
            height: 50%;
            display: flex;
            flex-direction: column;
            margin: 100px;
            width: 150px;
            padding: 150px;
            border: 1px solid black;
            border-radius: 10px;
            margin: auto;

        }

        input {
            height: 100px;
            width: 200%;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid black;
            padding: auto;
            opacity: 0.5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-left: 10px;
        }

        button {
            background: linear-gradient(to right, blue,purple);
            border: none;
            border-radius: 5px;
            color: white;
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
            z-index: 1;

        }

        button:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
        }
    </style>
</body>

</html>