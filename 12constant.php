<?php
// membuat constanta
// cara pertama:
define('NAMA', 'Muhammad Aulia Hanifi'); // define hanya sebagai constanta global, disimpan di luar

echo NAMA;
echo  "<br>";

// cara kedua:
const UMUR = 32; // const bisa dimasukkan ke dalam class

echo UMUR;
echo  "<hr>";



class Coba {
    // define('NAMA', 'Fahad');
    const NAMA = 'Fahad';
}

echo Coba::NAMA;
echo  "<hr>";


// magic constanta
echo __LINE__;
echo  "<br>";
echo __FILE__;
echo  "<br>";
echo __DIR__;
echo  "<br>";

function coba(){
    return __FUNCTION__;
}
echo coba();
echo  "<br>";

class CobaKelas {
    public $kelas = __CLASS__;
}
$obj = new CobaKelas;
echo $obj->kelas;
echo  "<br>";

echo __TRAIT__;
echo  "<br>";
echo __METHOD__;
echo  "<br>";
echo __NAMESPACE__;
echo  "<br>";