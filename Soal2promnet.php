<?php

//Nama Muhamad Afril Rohmansyah Putra
//NIM 19515005
//Prodi Sistem Informasi 2019
//Universitas Gajayana Malang
//PromnetR2
//Tugas 1 Soal 2
// membuat fungsi berulang
#include <stdio.h>
void menu();
main()
{
	int n,a;
	printf("\n+==========================================
==+\n");
	printf("fungsi untuk menampilkan Nama BERULANG\n");
	printf("\n");
	printf("\n+==========================================
==+\n");
	printf("berapa kali akan ditampilkan ulang? ketik disini\t : ");
	scanf("%d",&n);
	for (a=0;a<n;a++)
		menu();
}
void menu()
{
	puts("\n\Perkenalan Nama\n");
	puts(" Hallo... Nama saya David
		Saya adalah Mahasiswa Prodi Sistem Informasi
		Saya sangat Tertarik mempelajari Teknik Informatika")
}
?>