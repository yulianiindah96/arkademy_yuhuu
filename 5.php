<?php
$panjang = 32;
$karakter= 'abcdefghijklmnopqrstuvwxyz1234567890';
$string="";
$cetak = 3;
for($k=1;$k<=$cetak;$k++)
{
	for($i=0;$i<$panjang;$i++)
	{
		$pos=rand(0,strlen($karakter)-1);
		$string=$karakter{$pos};
		echo $string;
		}
		echo "<br>";
		
}


	?>
	