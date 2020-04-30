<?php
session_start();
if ($_SESSION['checkuser']==='login'){
    $name = $_POST['name'];
    $desc =$_POST['desc'];
    $plat = $_POST['plat'];
    
    $host = '127.0.0.1';
    $dbname = 'games';
    $u = 'root';
    $p = '';
    
    
    $conn = mysqli_connect($host, $u, $p, $dbname);
    
    if ($conn) {
        if ($name!="") {
            if ($desc!="") {
                if ($plat!="") {
                    $sql = "INSERT INTO games (name, descr, platform)
                    VALUES ('$name', '$desc', '$plat')";
        
                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['newgame'] = $name;
                        header("Location: http://127.0.0.1/admin.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    header("Location: http://127.0.0.1/index.php");
                }
            } else {
                header("Location: http://127.0.0.1/index.php");
            }
        } else {
            header("Location: http://127.0.0.1/index.php");
        }
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>