<?php
include 'config.php';

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "Login Successful";
    } else {
        echo "Invalid Credentials";
    }
}
?>

<form method="POST">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit" name="login" value="Login">
</form>
