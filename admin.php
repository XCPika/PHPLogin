<?php
session_start();
if ($_SESSION['checkuser'] === 'login') {
    $t = ["<h2>", $_SESSION['user'], "</h2>"];
    $email = $_SESSION['user'];
    $host = '127.0.0.1';
    $dbname = 'games';
    $u = 'root';
    $p = '';
    if (isset($_SESSION['newgame'])) {
        $text = "New game " . $_SESSION['newgame'] . " has been registered!";
    } else {
        $text ="";
    }
    $conn = mysqli_connect($host, $u, $p, $dbname);
    if (!$conn) {
        header("Location: http//127.0.0.1/logout.php");
    }
} else {
    header("Location: http://127.0.0.1/index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/shared.css" title="shared">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>PHP Admin Screen</title>
</head>

<body>
    <div class="container">
        <section class="bg">
            <section class="bg-cover">
                <section class="header">
                    <section class="header-l">
                        <img class='icon' src='logo.png'></img>
                        <h1 class='title'>Portfolio Game Register</h1>
                    </section>
                    <section class="header-r">
                        <section class="nav">
                            <form style="height:100%;" action="logout.php">
                                <button class='nav-item' type='submit'>Logout</button>
                            </form>
                        </section>
                    </section>
                </section>
                <p class='title-register'><?php echo $text ?></p>
            </section>
        </section>
        <div class='section-seperator'></div>
        <div class="content">
            <h2 class='text'>Register a new game.</h2>
            <div class="seperator"></div>
            <div class="form-content">
                <div class="form-container-light">
                    <form action="new_game.php" method="post">
                        <div class="form-group">
                            <label for="nameInput" class="label-text-dark">Game Name</label>
                            <input type="text" name="name" class="input-dark" id="nameInput" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="descInput" class="label-text-dark">Description</label>
                            <input type="text" name="desc" class="input-dark" id="descInput" placeholder="Enter description...">
                        </div>
                        <div class="form-group">
                            <label for="platInput" class="label-text-dark">Available Platforms</label>
                            <input type="text" name="plat" class="input-dark" id="platInput" placeholder="Enter platforms...">
                        </div>
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>