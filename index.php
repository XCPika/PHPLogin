<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/shared.css" title="shared">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>PHP Login Screen</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="title-text">PHP Login</h1>
            <form action="process.php" method="post">
                <div class="form-group">
                    <label for="emailInput" class="label-text">Email address</label>
                    <input type="email" name="email" class="input" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email...">
                    <small id="emailHelp" class="small-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="passInput" class="label-text">Password</label>
                    <input type="password" name="pass" class="input" id="passInput" placeholder="Enter password...">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>