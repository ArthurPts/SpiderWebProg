<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    </style>
</head>
<body>
    <?php
        if(isset($_POST['cookie_yes'])){
            setcookie("align");
            setcookie("font");
            setcookie("color");
        }
        else
    
    
    ?>
    <form action="hasil.php" method="post">
        <input type="submit" name="btnhasil" value="Lihat Hasil">
    </form>
    <form action="setting.php" method="posts">
        <button name="btnsetting">Lihat Setting</a></button>
    </form>


</body>
</html>