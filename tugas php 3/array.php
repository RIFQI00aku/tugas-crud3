<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Array</title>
</head>
<body>
  <?php
echo "<h1>Menampilkan Array</h1>";
$barang = ["sepatu","baju","celana"];
  
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

echo "<hr>";

echo "<h1>Array pake for</h1>";
for($i=0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}

echo "<hr>";

echo "<h1>Array pake foreach & while</h1>";

foreach($barang as $isi){
    echo $isi."<br>";
}

echo "<hr>";

$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}

echo "<hr>";

echo "<h1>Menghapus Array</h1>";

$hewan = [
    "singa",
    "kerbau",
    "banteng"
];

unset($hewan[1]);

echo $hewan[0]."<br>";
echo $hewan[1]."<br>";
echo $hewan[2]."<br>";

echo "<hr>";

echo "<h1>Menambah isi Array</h1>";

$hobi = [
    "futsal",
    "main game",
    "main gitar"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Ngoding";

// menambahkan isi pada indeks terakhir
$hobi[1] = "futsal";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}

echo "<hr>";

echo "<h1>Array assosiatif</h1>";

$artikel = [
    "lagu" => "modal sabar",
    "pencipta" =>"stand here alone",
    "view" => 11134803
];

// mencetak isi array assosiatif
echo "<h2>".$artikel["lagu"]."</h2>";
echo "<p>oleh: ".$artikel["pencipta"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";

echo "<hr>";

echo "<h1>Array Multidimensi</h1>";

$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

// cara mengakses isinya
echo $matrik[1][1]; 

echo "<hr>";

  ?>.
</body>
</html>