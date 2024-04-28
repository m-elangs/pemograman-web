<?php
// Deklarasi dan pemanggilan function
function salam(){
    echo "halo selamat pagi";
}
salam(); // Memanggil function salam()
echo "</br>";
echo "</br>";

// Function dengan parameter
$nama ="zidan";
function absen($nama){
    return $nama." hadir"; // Mengembalikan string yang berisi nama yang hadir
}
echo absen($nama); // Memanggil function absen() dengan parameter $nama
echo "</br>";
echo absen("Irfan"); // Memanggil function absen() dengan parameter string langsung
echo "</br>";
echo "</br>";

// Function dengan lebih dari 1 parameter
function jalan($mobil, $kecepatan){
    echo $mobil . " Jalan dengan kecepatan " . $kecepatan; // Menampilkan informasi mobil dan kecepatannya
    echo "</br>";
}
jalan("Hyundai", 70); // Memanggil function jalan() dengan parameter Hyundai dan 70
jalan("Supra", 100); // Memanggil function jalan() dengan parameter Supra dan 100
echo "</br>";

// Function dengan argument menggunakan variabel
function konser($penyanyi, $hari){
    echo $penyanyi. " Akan bernyanyi pada hari " . $hari; // Menampilkan informasi penyanyi dan hari konser
}
$band = "D'Masiv";
$day = "Senin";
konser($band,$day); // Memanggil function konser() dengan parameter $band dan $day
echo "</br>";
echo "</br>";

// Function dengan return value
function tambah($a,$b){
    $c = $a + $b; // Menambahkan nilai $a dan $b
    return $c; // Mengembalikan hasil penjumlahan
}
$d = tambah(3,6); // Memanggil function tambah() dengan parameter 3 dan 6, hasilnya disimpan dalam $d
echo $d; // Menampilkan nilai $d
echo "</br>";

// Function dengan default argument
function kali($a = 0,$b =10){
    return $a * $b; // Mengalikan $a dan $b, dengan default $a=0 dan $b=10
}
echo "</br>";
echo kali(); // Memanggil function kali() tanpa parameter, menggunakan default argument
echo "</br>";
echo kali(10,100); // Memanggil function kali() dengan parameter 10 dan 100
echo "</br>";
echo "</br>";

// Anonymous function
$salam = function () {
    return "halo"; // Mengembalikan string "halo"
};
echo $salam(); // Memanggil anonymous function yang disimpan dalam variabel $salam
echo "</br>";
echo "</br>";

// Arrow function
$salam = fn () => "halo dunia"; // Arrow function untuk mengembalikan string "halo dunia"
echo $salam(); // Memanggil arrow function
?>

