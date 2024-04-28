<?php
// menampilkan variable
$nama = "Zidan"; // Membuat variabel $nama dan memberinya nilai "Zidan"
define("GRAVITASI", 10); // Mendefinisikan konstanta GRAVITASI dengan nilai 10
echo $nama; // Menampilkan nilai dari variabel $nama
echo "</br>"; // Menampilkan baris baru (HTML break)
echo GRAVITASI; // Menampilkan nilai dari konstanta GRAVITASI

// Memanggil variable dalam string
$prodi = "Informatika"; // Membuat variabel $prodi dan memberinya nilai "Informatika"
echo "<p>Saya sedang berkuliah di prodi $prodi</p>"; // Menampilkan teks dengan memasukkan nilai variabel $prodi ke dalam string
$umur = 20; // Membuat variabel $umur dan memberinya nilai 20
echo "<p>Saya sudah berumur $umur</p>"; // Menampilkan teks dengan memasukkan nilai variabel $umur ke dalam string

// Menghapus Variable
$mobil = "Hyundai"; // Membuat variabel $mobil dan memberinya nilai "Hyundai"
echo $mobil; // Menampilkan nilai dari variabel $mobil
unset($mobil); // Menghapus variabel $mobil dari memori
echo "</br>"; // Menampilkan baris baru (HTML break)
echo $mobil; // Menampilkan nilai variabel $mobil yang seharusnya sudah dihapus (akan menghasilkan error karena variabel tidak didefinisikan)
?>
