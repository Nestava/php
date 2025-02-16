<?php

if (isset($_POST["submit"])) {
    if ($_POST["nama"] == "atmin" && $_POST["password"] == "nababan") {
        header("Location: atmin.php");
        exit;
    } else {
        $salah = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="margin-left : 25px">Login, wak!</h1>
    <?php

    if (isset($salah)) {
        ?>
        <h5 style="color : red; margin-left : 25px" style="margin-left : 25px">ada yg salah dongo</h5> <?php
    }


    ?>
    <ul>
        <form method="post">
            <li>
                <label for="name">Username:</label>
                <input type="text" name="nama" id="name">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="name">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>