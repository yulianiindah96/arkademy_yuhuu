<?php
$username = "Ayu99v";
$password = "p@ssW0rd#";

$upperpass = preg_match('@[A-Z]@',$password);
$lowerpass = preg_match('@[a-z]@',$password);
$numberpass = preg_match('@[0-9]@',$password);
$simbolpass = preg_match('[@]',$password);

$upperuser = preg_match('@[A-Z]@',$username);
$loweruser = preg_match('@[a-z]@',$username);
$numberuser = preg_match('@[0-9]@',$username);
$firstuser = preg_match('/^[0-9]*$/',$username);
$simbolfirstuser = preg_match('/^[@=_$]*$/',$username);

echo "<h2>Validasi Username</h2><br>";
echo "Username : ".$username."<br>";
if(!$upperuser || !$loweruser || !$numberuser || $firstuser || $simbolfirstuser || strlen($username)<5 || strlen($username)>9)
{echo "False";}
else{echo "True";}

echo "<h2>Validasi Password</h2><br>";
echo "Password : ".$password."<br>";

if(!$upperpass || !$lowerpass || !$numberpass || !$simbolpass || strlen($password)<8)
{echo "False";}
else{echo "True";}
?>
