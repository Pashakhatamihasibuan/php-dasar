<?php
// Casting -> Merubah tipe data
/* Sintaks Dasar Casting 
1. (int) $namaVariabel;
2. (string) $namaVariabel;
3. (float) $namaVariabel;
4. (bool) $namaVariabel;
5. (array) $namaVariabel;
6. (object) $namaVariabel;
*/

$jarak = "25 kilometer";
$nilai = "25.32";

// cast ke float
$jarak = (float) $jarak;
$nilai = (float) $nilai;

var_dump($jarak);
var_dump($nilai);


$string = "26 Kilometer";
$float = 30.5;
$integer = 30;
$boolean = true;

// cast ke string
$string = (string) $string;
$float = (string) $float;
$integer = (string) $integer;
$boolean = (string) $boolean;

// cast ke integer
$string = (int) $string;
$float = (int) $float;
$integer = (int) $integer;
$boolean = (int) $boolean;

// cast ke boolean
$string = (bool) $string;
$float = (bool) $float;
$integer = (bool) $integer;
$boolean = (bool) $boolean;

var_dump($string, $float, $integer, $boolean);


/**
 * Kenapa perlu casting?
 * - Melakukan operasi matematika
 * - Membandingkan nilai
 * - Menggabungkan string dan angka
 * - Memenuhi persyaratan fungsi (sebagai argument/parameter)
 * - Memberikan response yang sesuai (khususnya pada API)
 */
