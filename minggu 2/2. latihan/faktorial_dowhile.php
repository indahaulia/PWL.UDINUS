<?php
//INDAH AULIA A| A11.2019.11684

if (isset($_GET['num1'])){
    $i=1;
    $hasil=$i;
    $n=$_GET['num1'];
do {
    $hasil=$hasil * $i;
    $i++;
} while ($i<=$n);
}
?>

<html>
<head>
    <title>Faktorial WHile</title>
</head>
<body>
    <h3>Faktorial Do While</h3>
    <div class = "container">
        <form method="GET" url="faktorial_dowhile.php">
            <label for="fname">Angka : </label>
            <input type="text" name="num1" placeholder="Masukan Angka Faktorial "/><br><br>
            <button type="submit">hitung</button>
        </form>
        <label for="fname">Hasil <?php echo "$n!"?> : </label>
        <input type="text" value="<?php echo $hasil;?>" disabled/>
    </div> 
</body>
</html>