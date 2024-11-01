/*
* Variable
- Nilai dapat berubah-ubah
- Di PHP, tipe data sebuah variable juga bisa berubah-ubah
- Penamaan variable di PHP diawali dengan dollar ($) diikuti nama variable
- Aturan penamaan:
- Hanya boleh diawali dengan huruf atau underscore(_)
- Sensitif dengan huruf besar dan kecil
- Tidak bisa diawali dengan angka
- Hanya bisa breisi alpha-numeric dan underscore.
*/

<?php
$nama = "Hello World";
$umur = "25";
echo $nama;
echo $umur;
?>


/*
* Konstanta
- Nilai tidak dapat berubah-ubah.
- Pendeklarasian menggunakan fungsi define(nama, value);
- Aturan penamaan;
- Biasanya ditulis menggunakan huruf besar.
*/

<?php
define("PI", 3.14);
echo PI;
?>