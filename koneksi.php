<?php
$host ="localhost";
$user = "root";
$pass="";
$db="db";
$conn = mysqli_connect($host,$user,$pass);
if($conn)
{
	$buka = mysql_select_db($db);
	if(!$buka)
	{
		die("Database tidak dapat dibuka");
		}
		else
		{
			die("Server Mysql tidak terhubung");
			}
			}
?>