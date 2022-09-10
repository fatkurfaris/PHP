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
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
