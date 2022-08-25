<?php

class About
{
    public function index($nama = "faris", $pekerjaan = "mahasiswa")
    {
        echo "Halo nama saya $nama, pekerjaan saya $pekerjaan";
    }

    public function page()
    {
        echo 'about/page';
    }
}
