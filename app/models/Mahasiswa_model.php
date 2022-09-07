<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Fatkur Rizal",
    //         "nrp" => "111111111111",
    //         "email" => "Fatkurrizal@gmail.com",
    //         "jurusan" => "Informatika",
    //     ],
    //     [
    //         "nama" => "Fikry Ardianto",
    //         "nrp" => "22222222222222",
    //         "email" => "Fikryardianto@gmail.com",
    //         "jurusan" => "Teknik Lingkungan",
    //     ],
    //     [
    //         "nama" => "Zidane Azzam",
    //         "nrp" => "333333333333333",
    //         "email" => "Zidaneazzam@gmail.com",
    //         "jurusan" => "Teknik Industri",
    //     ],
    //     [
    //         "nama" => "Raihan moza",
    //         "nrp" => "4444444444444",
    //         "email" => "Raihanmoza@gmail.com",
    //         "jurusan" => "K3",
    //     ],
    // ];

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
