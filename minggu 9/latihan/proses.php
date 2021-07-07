<?php
require 'model.php';

if (isset($_POST['kirim'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $model = new Model();
    $model->insert($nim, $nama,$kelas,$fakultas,$prodi,$gender);
    header('Location:index.php');
}


if (isset($_POST['edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $model = new Model();
    $model->update($nim, $nama,$kelas,$fakultas,$prodi,$gender);
    header('Location:index.php');
}


if (isset($_GET['id'])) {
    $nim = $_GET['id'];
    $model = new Model();
    $model->delete($nim);
    header('Location:index.php');
}

