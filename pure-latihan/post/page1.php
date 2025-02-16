<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Royko</title>
</head>

<body>
    <?php if (isset($_POST["submit"])): ?>
        <h1 style="margin-left : 30px">Welkam <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    
    <form action="" method="post" style="margin : 30px">
        Masukkan Royko :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Submit!</button>
    </form>
</body>

</html>