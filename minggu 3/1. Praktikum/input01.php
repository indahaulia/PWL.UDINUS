<?php
//INDAH AULIA A | A11.2019.11684
if (isset($_POST['Input'])) { $nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>"; } ?>

<html>
<head>
    <title>Pengolahan Form</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        Nama Anda : <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Input">
    </FORM>
</body>
</html>

