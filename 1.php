<?php
$name = "Yuliani Indah Purnama Sari";
$age = 23;
$address = "Dusun Krajan RT 002, RW 003, kecamatan Puger, kabupaten Jember";
$hobbies = array("menyanyi", "masak", "sosial media");
$is_married = False;
$key_name="D3";
$year_in = 2015;
$year_out= 2018;
$major = "Computer Engineering";
//memeriksa kosong atau tidaknya major
if(empty($major))
{$major = "null";}
	else
	{$major;}
$skill_name= "Web Programming";
$level=2;
if($level==1){
	$level="Beginner";
}
else if($level==2)
{
	$level="Advanced";
	}
	else if($level==3)
	{
		$level="Expert";
		}
		else
		{
			$level="null";
			}
	
$interest_in_coding = True; 
//tampilkan
echo "Nama : ".$name."<br>";
echo "Usia : ".$age."<br>";
echo "Alamat : ".$address."<br>";
echo "hobi : <br>";
for($i=0;$i<count($hobbies);$i++)
{ echo"- ".$hobbies[$i]."<br>";}

echo "Apakah sudah menikah : ";
if ($is_married)
{echo "Menikah <br>";}
	else
	{echo "Belum Menikah <br>";}
echo "Riwayat pendidikan : ".$key_name.", ".$major.", ".$year_in."-".$year_out."<br>";
echo "Skill : ".$skill_name.", ".$level."<br>";
echo "Apakah tertarik dengan dunia coding : ";
if ($interest_in_coding)
{ echo "Ya, saya tertarik sekali <br>";}
	else
	{	echo "Tidak, saya tidak tertarik <br>";}	
$array=array(
"name"=>$name,
"age"=>$age,
"address"=>$address,
"hobbies"=>$hobbies[0].",".$hobbies[1].",".$hobbies[2],
"is_married"=>$is_married,
"list_school"=>$key_name.", ".$major.", ".$year_in."-".$year_out,
"skill_name"=>$skill_name.", ".$level,
"interest in coding"=>$interest_in_coding
);


$json=json_encode($array);
/*membuat file json */
echo"<br><b>File json </b><br>".$json."<br>";
if(file_put_contents("data.json",$json))
echo("<br>File sudah dibuat..");
else
echo("<br>oopss, ada yang salah");	
?> 