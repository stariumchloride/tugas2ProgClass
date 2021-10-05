<?php 

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

var_dump($hari);
echo "<br/>";
echo "<br/>";
var_dump($bulan);
echo "<br/>";
echo "<br/>";

echo "Jumlah hari dalam seminggu adalah " . count ($hari) . "\n hari <br/>";
echo "Jumlah bulan dalam setahun adalah " . count ($bulan) . "\n bulan <br/> <br/>";

$jumlah = count ($bulan);
echo $jumlah . "\n bulan <br/> <br/>";

$hasil = $jumlah * 19;
echo "hasil perkalian jumlah bulan dalam setahun dan umur saya adalah " . $hasil . "<br/> <br/>";


if ($hasil % 2 == 0){
    echo $hasil . " merupakan angka genap";
} else {
    echo $hasil . " merupakan angka ganjil";
}