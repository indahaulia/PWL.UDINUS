<?php 
include 'conn.php'; 
include 'conf.php'; 
session_start(); 
if (isset($_POST['Login'])) { 
    $user = $_POST['user']; 
    $pass = $_POST['pass']; 
    //periksa login 
    $addonq = " WHERE username = '".$user."' and password='".$pass."'"; 
    $hasil = $koneksi->prepare("SELECT * FROM tb_user ".$addonq." "); 
    $hasil->execute(); 
    $data = $hasil->fetchAll(); 
        if (!empty($data)) { 

        //menciptakan session 
        print_r($data);
        $_SESSION['username'] = $user; 
        $_SESSION['nama'] = $data[0]['nama']; 
        $_SESSION['hak'] = $data[0]['hak']; 
        print_r($_SESSION);
        //menuju ke halaman pemeriksaan session 
        header("Location: dashboard.php");
        }
    }
else { 
        ?> <html> 
        <head> 
        <title>Login here...</title> 
        </head> 
        <body> 
        <form action="" method="post"> 
        <h2>Login Here...</h2> 
        Username : <input type="text" name="user"><br> <br>
        Password : <input type="password" name="pass"><br> 
        <input type="submit" name="Login" value="Log In"> </form></body></html><?php 
    }
        
?>
