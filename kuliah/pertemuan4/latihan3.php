<?php

function cetak_angka($angka)
{
    for ($i = 1; $i <= $angka; $i++) {
        for ($w = 1; $w <= $i; $w++) {
            echo $w;
        }
        echo "<br>";
    }
}
echo cetak_angka(10);
echo "<br>";
echo cetak_angka(15);
