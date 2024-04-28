<?php
// Ini adalah komentar untuk bagian kode pertama, 
echo "<p>ini berasal dari php sederhana</p>";

// Ini adalah komentar untuk bagian kode kedua,
echo "<p>Ini E nya besar</p>";

// Ini adalah komentar untuk bagian kode ketiga, tentang penggunaan variabel yang case sensitive
$andi = "Andi"; // Variabel $andi dengan huruf 'a' kecil
echo $Andi; // Ini mencoba mencetak variabel $Andi (case sensitive), yang seharusnya tidak terdefinisi
echo $andi; // Ini mencetak variabel $andi yang benar (dengan huruf 'a' kecil)

// Ini adalah komentar untuk bagian kode keempat, menampilkan pesan "hello world" dan menggunakan beberapa statement
echo "<p>hello world</p>";
$a = 3;
$b = 4;
$nama = "Informatika";
$c = $a / 25.0;
if ($a != $b) {
    echo "<p>a dan b tidak sama</p>";
}

// Ini adalah komentar untuk bagian kode yang seharusnya menyebabkan error karena kurangnya titik koma
// $a = 5 + 7
// echo $a;
?>

