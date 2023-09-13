<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
    <h1>Menghitung Luas Lingkaran</h1>
    
    <?php
    
    $jari_jari = 5; 


    $luas = pi() * pow($jari_jari, 2);


    echo "Jari-Jari Lingkaran: " . $jari_jari . "<br>";
    echo "Luas Lingkaran: " . $luas;
    ?>
</body>
</html>
