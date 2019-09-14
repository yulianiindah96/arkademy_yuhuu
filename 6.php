<?php
include "C:/xampp/htdocs/koneksi.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
else
{
	die("Error");
}
$query ="SELECT name.name, work.work, salary.category from name,work,category WHERE id='$id'";
$sql=mysql_query($query);
$hasil=mysql_fetch_array($sql);

$id=$hasil('id');
$name = stripslashes($hasil['name']);
$earned_vote = stripslashes($hasil['earned_vote']);
if(isset($_POST['Edit']))
{
	$id=$_POST['id'];
	$name=addslashes(strip_tags($_POST['name']));
	$earned_vote=addslashes(strip_tags($_POST['earned_vote']));
	$query = "UPDATE candidates SET earned_vote='$earned_vote' WHERE id='$id'";
	$sql = mysql_query($query);
	if($sql)
	{
		echo "sip";
		}
		else
		{echo "no";}
}
?>
<html>
<head><title>QUICK COUNT</title></head>
<body>
<form action="" method="POST" name="input">

