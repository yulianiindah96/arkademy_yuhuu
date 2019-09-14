<html>
<head><title>Cari frasa</title></head>
<body>
<form action="" method="post" name="input">
Input String : <input type="text" name="nama"><br>
Kata yang dicari : <input type="text" name="cari"><br>
<input type="submit" name="Input" value="Search">
</form>
</body>
</html>

<?php
if(isset($_POST['Input']))
{
	$name = $_POST['nama'];
	$cari = $_POST['cari'];
	echo "String : <b>".$name."</b></br>";
	echo "Kata yang dicari : <b>".$cari."</b></br>";
	if (strlen($cari)>=strlen($name))
	{
		echo "tidak boleh";
		}
		
	else {
		preg_match_all("/".$cari."/",$name,$cari);
		//echo $is_match;
		//echo substr($name,strlen($cari),strlen($cari));
		foreach($cari[0] as $value)
		{
			echo $value.'<br/>';
			
			}
			echo "ditemukan : ".count($cari[0])." kali";
	}
}
?>