<?php
//INDAH AULIA ANDRIANI | A11.2019.11684
if (isset($_POST['nim'])&&isset($_POST['prodi'])&&isset($_POST['ntugas'])&&isset($_POST['nuts'])&&isset($_POST['nuas'])) {
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $num1 = $_POST['ntugas'];
    $num2 = $_POST['nuts'];
    $num3 = $_POST['nuas'];
    $catatan = array();
    if (isset($_POST['ket1'])) {
        $ket = $_POST['ket1'];
        $catatan[] = '<li>'.$ket.'</li>';
        }
    
    if (isset($_POST['ket2'])) {
        $ket = $_POST['ket2'];
        $catatan[] = '<li>'.$ket.'</li>';
        }
    
    if (isset($_POST['ket3'])) {
        $ket = $_POST['ket3'];
        $catatan[] = '<li>'.$ket.'</li>';
        }
    
    function nilai_akhir($tugas,$uts,$uas){
        $nakhir=((0.4*$tugas) + (0.3*$uts) + (0.3*$uas));
        if ($nakhir>84){
            return "$nakhir-A";
        } elseif ($nakhir >69){
            return "$nakhir-B";
        }elseif ($nakhir>59){
            return "$nakhir-C";
        }elseif ($nakhir>49) {
            return "$nakhir-D";
        } else {
            return "$nakhir-E";}
    }
    
}
   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, td, th {
            border: 1px solid black;
            text-align: center
            }

        table {
            width: 80%;
            border-collapse: collapse;
            }
</style>
    <title>Form Mahasiswa</title>
</head>
<body> 
<div class="container">
    <h2>Form Pengisian Data</h2>
    <form method="POST" action="data_mahasiswa.php">
    <table>
        <tr>
            <td><label> NIM : </label></td>
            <td><input type="text" placeholder="Masukan Nim" name="nim"></td>
        </tr>
        <tr>
            <td><label> Program Studi : <label></td>
            <td>
                <select name="prodi">
                    <option value="none">-- Pilih Program Studi --</option>
                    <option value="A11-Tenik Informatika S1">A11-Tenik Informatika S1</option>
                    <option value="A12-Sistem Informasi S1">A12-Sistem Informasi S1</option>
                    <option value="AA22-Teknik Informatika D322">A22-Teknik Informatika D3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label> Nilai Tugas : </label></td>
            <td><input type="text" placeholder="Isian hanya angka maksimal 100" name="ntugas"></td>
        </tr>
        <tr>
            <td><label> Nilai UTS : </label></td>
            <td><input type="text" placeholder="Isian hanya angka maksimal 100" name="nuts"></td>
        <tr>
        <tr>
            <td><label> Nilai UAS : </label></td>
            <td><input type="text" placeholder="Isian hanya angka maksimal 100" name="nuas"></td>
        </tr>
        <tr>
            <td><label> Catatan Khusus : </label><br></td>
            <td><input type="checkbox" name="ket1" value="Kehadiran >= 70%">Kehadiran >= 70%<br>
                <input type="checkbox" name="ket2" value="interaktif di kelas">interaktif di kelas<br>
                <input type="checkbox"name="ket3"  value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas<br>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button> Simpan </button></td>
        </tr>
    <table>
    </form>
    </div>

    <div>
    <h2>Data Mahasiswa</h2>
    <table style="border:1px solid; width:">
        <tr>
            <td >Program Studi</td>
            <td>NIM</td>
            <td>Nilai Akhir</td>
            <td>Status</td>
            <td>Catatan Khusus</td>
        </tr>
        <tr>
            <td>
                <?php if (!empty($prodi)){
                    echo $prodi;
                }?>
            </td>
            <td>
                <?php if (!empty($nim)){
                    echo $nim;}?>
            </td>
            <td>
                <?php if (!empty(nilai_akhir($num1,$num2,$num3))){
                    echo nilai_akhir($num1,$num2,$num3);
                }

                ?>
            </td>
            <td>
                <?php if (!empty(nilai_akhir($num1,$num2,$num3))){
                    if (nilai_akhir($num1,$num2,$num3)>60){
                    echo "LULUS";} else {
                    echo "TIDAK LULUS";}
                }
                ?>
            </td>
            <td>
                <?php 
                $catatan_sikap = '';
                if (!empty($catatan)){
                    $catatan_sikap = implode(" ", $catatan);}
                echo $catatan_sikap;
                ?>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>


