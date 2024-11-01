<!-- 
Tipe Data Skalar
- String -> Teks atau Karakter
- Integer -> Bilangan Bulat
- Float -> Bilangan Desimal
- Boolean -> true atau false
- Array -> ["Aziz", "Budi", "Caca"]
- Object -> {instance dari sebuah kelas}
- NULL -->




<?php
$umur = 25;
$jarak = 19.5;
$nama = "Hello World";
$is_student = true;
$siswa = ["Aziz", "Budi", "Caca"];
// Object
class Siswa {}
$object = new Siswa();

var_dump($umur, $jarak, $nama, $is_student, $siswa, $object);
