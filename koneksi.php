<?php
$host = "localhost";
$user = "admin_klinik";
$pass = "312010067";
$db = "klinik_312010067";
$con = mysqli_connect($host, $user, $pass, $db);
if ($con == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "";
?>
