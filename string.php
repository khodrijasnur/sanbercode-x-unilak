<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>soal string</h1>

    <?php
    echo "<h3>Soal no 1</h3>";

    $kalimat1 = "Selamat datang di sanbercode";

    echo "panjang string kalimat 1: " . strlen($kalimat1) . "<br>";
    echo "panjang kata kalimat  1" . str_word_count($kalimat1) . "<br>";

    echo "<h3>Soal no 2</h3>";

    $kalimat2 = "lorem ipsum dolor si amet";

    echo "kata pertama kalimat 2: " . substr($kalimat2, 0, 5) . "<br>";
    echo "Kata kedua kalimat 2: " . substr($kalimat2, 6, 5) . "<br>";
    echo "Kata ketiga kalimat 2: " . substr($kalimat2, 12, 5) . "<br>";
    echo "Kata keempat kalimat 2: " . substr($kalimat2, 18) . "<br>";

    echo "<h3>Soal no 3</h3>";
    
    $kalimat3 = "saya sedang belajar";

    echo "sebelum : " . $kalimat3 . "<br>";
    echo "sesudah : " . str_replace("belajar" , "makan", $kalimat3) . "<br>";
    ?>
</body>
</html>