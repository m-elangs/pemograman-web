<?php
// Fungsi untuk mengubah huruf menjadi lowercase dan uppercase
$kalimat = "Selamat Pagi Kawanku";
echo strtolower($kalimat); // Output: selamat pagi kawanku
echo "</br>";
echo strtoupper($kalimat); // Output: SELAMAT PAGI KAWANKU
echo "</br>";

// Fungsi untuk mengubah huruf pertama menjadi huruf besar
$kalimat2 = "halo semuanya";
echo ucfirst($kalimat2); // Output: Halo semuanya
echo "</br>";

// Fungsi untuk mengubah huruf pertama menjadi huruf kecil
$kalimat3 = "Halo semuanya";
echo lcfirst($kalimat3); // Output: halo semuanya
echo "</br>";

// Fungsi trim untuk menghapus spasi di awal dan akhir string
$a = "     halo     ";
echo "</br>";
echo $a; // Output:      halo     
$trim_a = trim($a); // Menghapus spasi di awal dan akhir
echo "</br>";
echo $trim_a; // Output: halo
echo "</br>";
echo "</br>";

// Fungsi number_format untuk memformat angka
echo "</br>";
echo number_format(56.99, 0, ",", "."); // Output: 57
echo "</br>";
echo number_format(101020103203012.921329, 2, ",", "."); // Output: 101.020.103.203.012,92
echo "</br>";

// Fungsi substr untuk mengambil substring dari suatu string
$kalimat = "mari kita belajar php di Telu surabaya prodi informatika";
echo "</br>";
echo substr($kalimat, 0); // Output: mari kita belajar php di Telu surabaya prodi informatika
echo "</br>";
echo substr($kalimat, 15); // Output: belajar php di Telu surabaya prodi informatika
echo "</br>";
echo substr($kalimat, 0.7); // Output: (tidak ada output karena parameter ke-2 harus integer)
echo "</br>";
echo substr($kalimat, 0, 11); // Output: mari kita b
echo "</br>";
echo "</br>";

// Menghitung jumlah elemen dalam array menggunakan count
$zoo = ["gajah", "rusa", "jerapah", "ular", "harimau"];
for ($i = 0; $i < count($zoo); $i++) {
    echo "</br>";
    echo "hewan ke " . ($i+1) . " Adalah " . $zoo[$i];
}
echo "</br>";
echo "</br>";

// Fungsi array_push untuk menambahkan elemen baru pada array
$siswa = ["zidan","irfan","zaky"];
$siswa1 = "Joko";
var_dump($siswa); // Menampilkan isi array sebelum ditambah
array_push($siswa,$siswa1); // Menambahkan elemen baru ke array
echo "</br>";
var_dump($siswa); // Menampilkan isi array setelah ditambah
echo "</br>";

// Fungsi array_pop untuk menghapus dan mengembalikan elemen terakhir dari array
$popsiswa = array_pop($siswa); // Menghapus dan mengembalikan elemen terakhir array
echo $popsiswa; // Output: Joko (elemen yang dihapus)
echo "</br>";
var_dump($siswa); // Menampilkan isi array setelah elemen terakhir dihapus
echo "</br>";

$popsiswa = array_pop($siswa); // Menghapus dan mengembalikan elemen terakhir array
echo $popsiswa; // Output: zaky (elemen yang dihapus)
echo "</br>";
var_dump($siswa); // Menampilkan isi array setelah elemen terakhir dihapus
echo "</br>";
echo "</br>";

// Fungsi in_array untuk memeriksa apakah nilai tertentu ada dalam array
$siswa = ["zidan","irfan","zaky","joko","rani"];
$cek = in_array("joko", $siswa); // Memeriksa apakah "joko" ada dalam array $siswa
var_dump($cek); // Output: true (karena "joko" ada dalam array)
if($cek){
    echo "joko ada di dalam array siswa"; // Output: joko ada di dalam array siswa
}
echo "</br>";
$cek2 = in_array("kevin", $siswa); // Memeriksa apakah "kevin" ada dalam array $siswa
var_dump($cek2); // Output: false (karena "kevin" tidak ada dalam array)
echo "</br>";
?>

