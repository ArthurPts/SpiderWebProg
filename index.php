<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="hasil.php" method="<?php echo ?>">
        <input type="submit" name="btnhasil" value="Lihat Hasil">
    </form>
    <form action="">
        <a href="setting.php"><button>Lihat Setting</button></a>
    </form>


</body>
</html>