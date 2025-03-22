<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="index.php" method="$_COOKIE">
<p><label>Text Align:</label>
    <select name="textAlign">
    <option value="" disabled <?= empty($fontFamily) ? "selected" : "" ?>>-- Pilih Text Align --</option>
        <option value="left">Left</option>
        <option value="right">Right</option>
        <option value="center">Center</option>
        <option value="justify">Justify</option>
    </select>
</p>
<p><label>Font Family</label>
    <select name="fontFamily">
    <option value="" disabled <?= empty($fontFamily) ? "selected" : "" ?>>-- Pilih Font Family --</option>
        <option value="Arial">Arial</option>
        <option value="Tahoma">Tahoma</option>
        <option value="Calibri">Calibri</option>
    </select>
</p>
    <p>
    <label>Color :</label>
    <input type="color" name="btncolor" >
    </p>

    <input type="submit" name="btnsimpan" Value="Simpan">
</form>

<?php

setcookie("textAlign", $_COOKIE['textAlign']);
setcookie("fontFamily", $_COOKIE['fontFamily']);
setcookie("color", $_COOKIE['btncolor']);


// if(isset($_COOKIE['btnsetting'])){
//     echo $_COOKIE['textAlign'];
//     echo $_COOKIE['fontFamily'];
//     echo $_COOKIE['color'];

// }
?>
<!-- , time() + 3600, "/" -->
</body>
</html>