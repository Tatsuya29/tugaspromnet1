<?php
//Nama Muhamad Afril Rohmansyah Putra
//NIM 19515005
//Prodi Sistem Informasi 2019
//Universitas Gajayana Malang
//PromnetR2
//Tugas 1 Soal 1
$nilai = "87";
if (($nilai>86) AND ($nilai<100))
{
	$hasil = "selamat...proses belajarmu sangat baik,tingkatkan terus kemampuan codingnya...";
}
elseif (($nilai>71) AND ($nilai<85))
{
	$hasil = " Selamat...kamus sudah mulai memahami pemrograman PHP,tingkatkan terus skill kamu...";
}
elseif (($nilai>60) AND ($nilai<70))
{
	$hasil = "uppssss...skill kodingmu perlu diasah lagi gaes,tetap semangat belajar dan explorer kemampuan y...";
}
else
{
	$hasil = "Nilai diluar Kategori";
}
echo "Nilai Anda Masuk Dalam Kategori".$hasil;
?>