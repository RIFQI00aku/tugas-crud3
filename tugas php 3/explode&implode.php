<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar explode&implode</title>
</head>
<body>
<?php
   
    $kalimat = "rifqi sangat suka manchester united karena #GGMU";

    //memisahkan string menjadi array
    $data = explode(" " , $kalimat);

    //string menjadi array
    print_r($data);
    //print_r berguna untuk menampilkan isi array
    echo "<br/>";
    echo "<br/>";
    echo " Data 1 = " . $data[0];
    echo "<br/>";
    echo " Data 2 = " . $data[1];
    echo "<br/>";
    echo " Data 3 = " . $data[2];
    echo "<br/>";
    echo " Data 4 = " . $data[3];
    echo "<br/>";
    echo " Data 5 = " . $data[4];
    echo "<br/>";
    echo " Data 6 = " . $data[5];
    echo "<br/>";
    echo " Data 7 = " . $data[6];
?>
</body>
</html>