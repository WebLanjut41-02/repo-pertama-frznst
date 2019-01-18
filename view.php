<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BERAT BADAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="" method="POST">
<table>
    
    <tr>
    <td>Berat Badan :</td>
    <td>
    <input type="text" name="berat">
    </td>
    </tr>
    <tr>
    <td>Tinggi Badan :</td>
    <td>
    <input type ="text" name="tinggi">
    </td>
    </tr>
    <tr>
    <td>Jenis Kelamin :</td>
    <td>
    <input type="radio" name="jk" value="lk">Laki-laki
    </td>
    <td>
    <input type="radio" name="jk" value="pr">Perempuan</td>
    </tr>
    <tr>
    <td>
    <input type="submit" name="submit" value="submit"></td></tr>
    
</table>
</form>
</body>
</html>

<?php
include'cek.php';
if(isset($_POST['submit'])){
$main = new hitung();
$main->set();
}
?>