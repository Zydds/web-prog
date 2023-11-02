<?php

require 'function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php"); // Redirect to main page (list museum data)
            exit;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>
        Halaman Login
    </h1>

    <?php if (isset($error)): ?>
    <p style="color: red; font-style: italic">username/password salah pak!</p>
<?php endif; ?>

    <form action="" method="post">

    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
        <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="login">
                Login!
            </buttom>
        </li>
    </ul>

    </form>
</body>
</html>