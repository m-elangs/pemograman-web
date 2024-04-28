<?php
// Deklarasi variabel dengan tipe data yang berbeda-beda
$var1 = 12; //integer
echo gettype($var1); // Output: integer
echo "</br>";

$var2 = 99.99; //double
echo gettype($var2); // Output: double
echo "</br>";

$var3 = "Informatika"; //string
echo gettype($var3); // Output: string
echo "</br>";

$var4 = 'Ini petik 1'; //string
echo gettype($var4); // Output: string
echo "</br>";
echo "</br>";

// Melakukan var_dump untuk menampilkan tipe data dan nilai variabel
$var1 = 12;
var_dump($var1); // Output: int(12)
echo "</br>";
$var2 = 98.99;
var_dump($var2); // Output: float(98.99)
echo "</br>";
$var3 = "String halo world";
var_dump($var3); // Output: string(17) "String halo world"
echo "</br>";
echo "</br>";

// Menggunakan escape karakter dalam string dengan tanda kutip ganda
$kalimat = "Sedang belajar \"PHP\"";
echo $kalimat; // Output: Sedang belajar "PHP"
echo "</br>";

// Menggunakan variabel dalam string dengan tanda kurung kurawal
$nama = "Zidan";
echo "{$nama}, selamat pagi"; // Output: Zidan, selamat pagi
echo "</br>";
echo '$nama, selamat pagi'; // Output: $nama, selamat pagi (karena dalam tanda kutip satu)
echo "</br>";
echo "</br>";

// Variabel boolean
$benar = true;
$salah = false;
var_dump($benar); // Output: bool(true)
echo "</br>";
var_dump($salah); // Output: bool(false)
echo "</br>";
if($benar){
    echo "ini jalan apabila benar"; // Output: ini jalan apabila benar
}
echo "</br>";
echo "</br>";

// Array
$array = array(121,"Joko",12414.123,'ini quote 1');
$array[] = "Informatika";
var_dump($array); // Menampilkan semua elemen array dan tipe datanya

// Menghapus elemen array menggunakan unset
unset($array[1]);
unset($array[3]);

echo "<pre>";
var_dump($array); // Menampilkan hasil setelah elemen dihapus
echo "</pre>";
echo $array[1]; // Output: Notice: Undefined offset: 1 in ...

// Array dengan asosiasi
$pekerja = array(
    "nama" => "Zidan",
    "umur" => "20",
    "asal" => "Sidoarjo",
    "tglLahir" => "10 Agustus 2004"
);
echo "<pre>";
var_dump($pekerja); // Menampilkan array asosiasi
echo "</pre>";
echo $pekerja["nama"]; // Output: Zidan

// Objek
class Mahasiswa{
    public $nim;
    public $nama;
    public $umur;
    public $tglLahir;

    public function getNama(){
        return $this->nama;
    }
}

$mahasiswa1 = new Mahasiswa(); // Membuat objek baru dari kelas Mahasiswa
var_dump($mahasiswa1); // Menampilkan struktur objek
$mahasiswa1->nim = "1201212"; // Mengisi nilai properti objek
$mahasiswa1->nama = "Irfan";
$mahasiswa1->umur = "19";
$mahasiswa1->tglLahir = "12022004";
echo "<pre>";
var_dump($mahasiswa1); // Menampilkan objek setelah properti diisi
echo "</pre>";
echo $mahasiswa1->getNama(); // Memanggil metode pada objek
echo "</br>";
echo "</br>";

// Nilai null
$kosong = null; // Menginisialisasi variabel dengan nilai null
echo $kosong; // Output: (tidak menampilkan apa-apa)
var_dump($kosong); // Output: NULL
?>
