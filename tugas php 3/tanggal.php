<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan tanggal</title>
</head>
<body>
<?php
    echo"<h2>menampilkan tanggal</h2>";
    echo date('l, d-m-Y');
    echo "<br/>";
    echo date('d / M / y');
    echo "<br/>";
    echo date('D - M / Y' );
    echo "<br>";
    
    echo"<h2>menampilkan waktu</h2>";
    // menampilkan jam sekarang
    echo date('H:i:s a');
    echo "<br/>";
    
    //kombinasi format tanggal dan jam
    echo date('l, d-m-Y  h:i:s a');
?>
</body>
</html>