<?php
// Operasi aritmatika
$aritmatika1 = +11; // Penambahan tanda plus tidak mempengaruhi nilai
$aritmatika2 = -3; // Penambahan tanda minus menghasilkan nilai negatif
$aritmatika3 = 3 + 8; // Penjumlahan
$aritmatika4 = 7 - 9; // Pengurangan
$aritmatika5 = 9 * 10; // Perkalian
$aritmatika6 = 10 / 5; // Pembagian
$aritmatika7 = 10 % 9; // Modulus (sisa pembagian)
$aritmatika8 = 2 ** 4; // Pangkat
var_dump($aritmatika1); echo "</br>"; // Menampilkan nilai variabel
var_dump($aritmatika2); echo "</br>";
var_dump($aritmatika3); echo "</br>";
var_dump($aritmatika4); echo "</br>";
var_dump($aritmatika5); echo "</br>";
var_dump($aritmatika6); echo "</br>";
var_dump($aritmatika7); echo "</br>";
var_dump($aritmatika8); echo "</br>";

echo "</br></br>";

// Increment dan decrement
$a = 5;
echo $a; // Output: 5
echo "</br>";
echo ++$a; // Output: 6 (increment sebelum mencetak nilai)
echo "</br>";
echo $a; // Output: 6
echo "</br>";
$a = 7;
echo $a; // Output: 7
echo "</br>";
echo $a++; // Output: 7 (cetak nilai lalu increment)
echo "</br>";
echo $a; // Output: 8
echo "</br>";
$a = 8;
echo $a; // Output: 8
echo "</br>";
echo --$a; // Output: 7 (decrement sebelum mencetak nilai)
echo "</br>";
echo $a; // Output: 7
echo "</br>";
$a = 1;
echo $a; // Output: 1
echo "</br>";
echo $a--; // Output: 1 (cetak nilai lalu decrement)
echo "</br>";
echo $a; // Output: 0
echo "</br>";
echo "</br>";

// Operasi perbandingan
echo "</br>";
var_dump(14 < 12); // Output: bool(false)
echo "</br>";
var_dump(14 < 14); // Output: bool(false)
echo "</br>";
var_dump(14 >= 12); // Output: bool(true)
echo "</br>";
var_dump(12 <= 14); // Output: bool(true)
echo "</br>";
var_dump(14 <> 12); // Output: bool(true) (tidak sama dengan)
echo "</br>";
var_dump(14 == 12); // Output: bool(false) (sama dengan)
echo "</br>";
var_dump(14 === 12); // Output: bool(false) (identik)
echo "</br>";
var_dump(150 == 1.5e2); // Output: bool(true) (nilai numerik sama)
echo "</br>";
echo "</br>";

// Operasi pada string
$str1 = "halo"."User"; // Menggabungkan dua string
echo $str1; // Output: haloUser
echo "</br>";
$a = "aku";
$b = "Mau";
$c = "Belajar";
echo $a.$b.$c; // Output: akuMauBelajar
echo "</br>";

$kalimat = 9 . " adalah kelipatan dari 3"; // Menggabungkan string dengan nilai numerik
echo $kalimat; // Output: 9 adalah kelipatan dari 3
echo "</br>";
$kalimat = true . " adalah data boolean atau istilahnya benar"; // Menggabungkan string dengan boolean
echo $kalimat; // Output: 1 adalah data boolean atau istilahnya benar

// Operasi pada array
$kelasA = ["Anwar", "Alam", "Rina", "Sari"];
$kelasB = ["Alex", "Rico", "Rina"];

$campur = $kelasA + $kelasB; // Menggabungkan dua array (elemen yang sama hanya diambil dari array pertama)
echo "</br>";
print_r($campur); // Output: Array ( [0] => Anwar [1] => Alam [2] => Rina [3] => Sari [4] => Rico )
echo "</br>";
var_dump($campur); // Output: array(5) { [0]=> string(5) "Anwar" [1]=> string(4) "Alam" [2]=> string(4) "Rina" [3]=> string(4) "Sari" [4]=> string(4) "Rico" }
echo "</br>";

var_dump($kelasA == $kelasB); echo "<br>"; // Output: bool(false) (sama dengan)
var_dump($kelasA === $kelasB); echo "<br>"; // Output: bool(false) (identik)
var_dump($kelasA != $kelasB); echo "<br>"; // Output: bool(true) (tidak sama dengan)
var_dump($kelasA !== $kelasB); echo "<br>"; // Output: bool(true) (tidak identik)
var_dump($kelasA <> $kelasB); echo "<br>"; // Output: bool(true) (tidak sama dengan)
?>

