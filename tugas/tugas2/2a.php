<?php
// variabel yang menyimpan nama depan dan nama belakang
$first = "Reza";
$last = "Nurjaman";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $first . " " . $last . "<br>";
    } elseif ($i % 3 == 0) {
        echo $first . "<br>";
    } elseif ($i % 5 == 0) {
        echo $last . "<br>";
    } else {
        echo $i;
        echo "<br>";
    }
}
