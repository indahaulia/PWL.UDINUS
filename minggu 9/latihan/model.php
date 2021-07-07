<?php
require 'koneksidb.php';

class Model extends koneksi_database
{
    // var $connDB;
    public function __construct()
    {

        $this->connectDB = $this->get_connection();
    }

    public function insert($nim, $nama,$kelas,$fakultas,$prodi,$gender)
    {
        $sql = "INSERT INTO mahasiswa (nim,nama,kelas,fakultas,prodi,gender) VALUES('$nim','$nama','$kelas','$fakultas','$prodi','$gender')";

        $this->connectDB->query($sql);
    }

    public function tampil_data()
    {
        $sql = "SELECT * FROM mahasiswa";
        $bind = $this->connectDB->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function find($nim)
    {
        $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
        $bind = $this->connectDB->query($sql);
        $baris = "";
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update($nim, $nama,$kelas,$fakultas,$prodi,$gender)
    {
        $sql = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas' , fakultas='$fakultas', prodi='$prodi', gender='$gender' WHERE nim='$nim'";
        $this->connectDB->query($sql);
    }

    public function delete($nim)
    {
        $sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
        $this->connectDB->query($sql);
    }
}
