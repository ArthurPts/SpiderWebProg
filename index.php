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
        if(isset($_COOKIE['textAlign']) && isset($_COOKIE['fontFamily']) && isset($_COOKIE['color'])){
            echo $_COOKIE['textAlign'];
            echo $_COOKIE['fontFamily'];
            echo $_COOKIE['color'];
        }
        
    
    
    ?>
    <form action="hasil.php" method="$_COOKIE">
        <input type="submit" name="btnhasil" value="Lihat Hasil">
    </form>
    <form action="setting.php" method="$_COOKIE">
    <input type="submit" name="btnsetting" value="Lihat Setting">
        
    </form>


</body>
</html>