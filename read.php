<?php

session_start();

if (empty($_SESSION["username"]) and empty($_SESSION["password"])) {
    echo "Maaf, anda belum login";
} else {
    //$_SESSION["printJudul"] = "ini judul";
    //$_SESSION["printIsi"] = "ini isi";
    $Judul = $_SESSION["printJudul"];
    $Isi = $_SESSION["printIsi"];


    $newPage = "note.php";
    $fh = fopen($newPage, 'w');

    $php =
        '<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open: ' . $Judul . '</title>
</head>
<body>
    <form action="builder.php" method="post">
        <textarea name="judul" id="judul" cols="30" rows="2">' . $Judul . '</textarea>
        <br>
        <textarea name="isi" id="isi" cols="30" rows="10">' . $Isi . '</textarea>
        <input type="submit" value="Home">
    </form>
</body>
</html>';

    fwrite($fh, $php);
    fclose($fh);
    header("location: note.php");
}
