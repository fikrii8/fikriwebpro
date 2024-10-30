<?php
$pilihan = 3;
//fikri
$angka1 = -3;
$angka2 = -1;
$penjumlahan = $angka1 + $angka2;

if ($pilihan == 1){
    if ($angka1 > 0 && $angka2 > 0){
        echo "hasil penjumlahan = " . $angka1 + $angka2;
    }
    else  {
        echo "Angkanya harus positif";
    }
}   elseif ($pilihan == 2) {
    if ($angka1 > 0 && $angka2 > 0){
        echo "hasil rata rata = " . $penjumlahan/2;
    }
    else {
        echo "Angkanya harus positif";
    }
}   elseif ($pilihan == 3) {
    if ($angka1 > 0 && $angka2 > 0){
        
        echo "hasil penjumlahan = " . $angka1 + $angka2 . "hasil rata rata = " . $penjumlahan/2;
    }
    else {
        echo "Angkanya harus positif";
    }
}

?>