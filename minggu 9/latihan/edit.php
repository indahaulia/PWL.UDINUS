<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->find($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" type="text/css" href="assets/css/css.css"> 

</head>

<body>
    <div class="header"> 
    <div class="big-logo"></div> 
    <?php include 'menu.php';?> 
    </div>
    <div class="content">
    <div class="container">
    <br><br><a class="btn pull-right" href="index.php">Kembali</a>      
    <h1>Edit Data Mahasiswa</h1>    
    <div style="clear:both">&nbsp;</div>
        <form action="proses.php?" method="post">
            <table>
                <tr>
                    <td>
                    <td><input type="hidden" name="nim" value="<?= $data->nim ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="" value="<?php echo $data->nama; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender" id="" value="<?php echo $data->gender; ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" id="" value="<?php echo $data->kelas; ?>"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><input type="text" name="prodi" id="" value="<?php echo $data->prodi; ?>"></td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td><input type="text" name="fakultas" id="" value="<?php echo $data->fakultas; ?>"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="edit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
</body>

</html>