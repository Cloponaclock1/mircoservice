<?php

$notvalid = False;


if ($_SERVER["REQUEST_METHOD"] ==="POST") {
    $mysqli = require __DIR__ . "/database.php";
    $sqlinfo = sprintf("SELECT * FROM user WHERE username = '%s'",
    $mysqli->real_escape_string($_POST["username"]));

    $result = $mysqli -> query($sqlinfo);

    $user  = $result->fetch_assoc();
    if ($user) {
        if (password_verify($_POST["password"], $user["password"])) {
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: index.php");
        }
        $notvalid = True;
    }

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
    <h2>Login</h2>
    <?php if ($notvalid): ?> <b>Invalid Login</b>
    <?php endif; ?>
    <form method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" id="name" name="username">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <button>Enter</button>
        
    </form>
    
    
</body>
</html>

