<?php
//INDAH AULIA | A11.2019.11684

$hasil=0;
if (isset($_GET['num1'])&&isset($_GET['operator'])&&isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    if ($operator=='kali') {
        $hasil = $num1 * $num2;
    }elseif ($operator=='bagi') {
        $hasil = $num1 / $num2;
    }elseif ($operator=='kurang') {
        $hasil = $num1-$num2;
    }elseif ($operator=='tambah') {
        $hasil = $num1 + $num2;
    }
}
?>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <h2>Kalkulator</h2>
    <div class = "container">
        <form method="GET" url="kalkulator.php">
            <label for="fname">Bil 1 : </label>
            <input type="text" name="num1" placeholder="Masukkan Bilangan "/><br><br>
            <label for="fname">Bil 2 : </label>
            <input type="text" name="num2" placeholder="Masukkan Bilangan "/><br><br>
            <label for="fname">Operator : </label>
            <select name="operator">
                <option value="kali">x</option>
                <option value="bagi">/</option>
                <option value="kurang">-</option>
                <option value="tambah">+</option>
            </select>
            <button type="submit">submit</button>
        </form>
        <label for="fname">Hasil : </label>
        <input type="text" value="<?php echo $hasil;?>" disabled/>
    </div>
    
</body>
</html>