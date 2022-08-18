<?php

define('NAMA', 'FATKUR RIZAL ROCHMADINA PUTRA');

echo NAMA;

const UMUR = 21;
echo UMUR, "<hr>";



// class Coba
// {
//     const NAMA = 'FATKUR ';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function Coba()
// {
//     return __FUNCTION__;
// }

// echo Coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
