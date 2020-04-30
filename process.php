<?php

$email = $_POST['email'];
$pwd = $_POST['pass'];

$host = '127.0.0.1';
$dbname = 'login';
$u = 'root';
$p = '';


$conn = mysqli_connect($host, $u, $p, $dbname);

if ($conn) {
    $query = "SELECT * FROM users where email='$email' and password='$pwd'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['checkuser']  = 'login';
        $_SESSION['user'] = $email;
        header("Location: http://127.0.0.1/admin.php");
    } else {
        header("Location: http://127.0.0.1/index.php");
    }
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>