<?php
// VARIABEL

// Variabel String
$namaDepan = 'Samuel';
$namaBelakang = "Bosawer";

echo $namaDepan;
echo $namaBelakang;

// Gabung String
$namaLengkap =  $namaDepan .' '. $namaBelakang;


// Variable integer
$x = 10;
$y = 70;

// - = Operasi pengurangan
// * = Operasi perkalian
// / = Operasi pembagian
// + = Operasi pertambahan
// % = Hasil bagian

$penjumlahan = $x + $y;
echo '<p>'. $penjumlahan .'</p>';

$kurang = $x - $y;
echo '<p>'. $kurang .'</p>';

$kali = $x * $y;
echo '<p>'. $kali .'</p>';

// pembagian
$kali = $x / $y;
echo '<p>'. $kali .'</p>';

$mod = $x % $y;
echo '<p>'. $mod .'</p>';


//  OPERATOR PERCABANGAN atau IF ELSE

$nilai = 100;

// perbandigan untuk kondisi <, >, =, !=, ==, ===, 
// OR = ||
// AND = &&
// NOT !=

// 90 = A, 80 = B, 70 = C, 60 = D, E 
if(90 < $nilai)
{
    echo '<p> Selamat '. $namaLengkap  .'</p>';
    echo '<p> Anda mendapatkan nilai A </p>';
}else if(80 <= $nilai){
    echo '<p> Selamat '. $namaLengkap  .'</p>';
    echo '<p> Anda mendapatkan nilai B </p>';
}else if(70 <= $nilai){
    echo '<p> Selamat '. $namaLengkap  .'</p>';
    echo '<p> Anda mendapatkan nilai C </p>';
}else if(60 <= $nilai){
    echo '<p> Selamat '. $namaLengkap  .'</p>';
    echo '<p> Anda mendapatkan nilai D </p>';
}else{
    echo '<p> Selamat '. $namaLengkap  .'</p>';
    echo '<p> Anda mendapatkan nilai E </p>';
}


//  PENGULANGAN

// For
// While
// Foreach
echo "<h1> Bilangan Ganjil </h1>"; 
for ($i=0; $i <= 100; $i++) { 
    if($i % 2 !== 0)
    {
        echo $i.', ';
    }
}

echo "<br> <h1> Bilangan GENAP </h1>"; 
for ($i=0; $i <= 100; $i++) { 
    if($i % 2 == 0)
    {
        echo $i.', ';
    }
}

