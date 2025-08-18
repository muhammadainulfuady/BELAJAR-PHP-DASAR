<?php
// for
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}

// while
$j = 1;
while ($j <= 3) {
    echo "Angka $j <br>";
    $j++;
}

// foreach (khusus array)
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo $b . "<br>";
}
?>