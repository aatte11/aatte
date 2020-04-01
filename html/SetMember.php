<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankID=$_POST["Rank_ID"];
$RankPW=$_POST["Rank_PW"];
$MemberTime=$_POST["Member_Time"];

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");


$check=mysql_query("SELECT * FROM `MemberTable` where ID='".$RankID."'");

$nomrows= mysql_num_rows($check);
if($nomrows==0)
{

$insert_query = "INSERT INTO MemberTable VALUES('".$RankID."','".$RankPW."','1','$MemberTime','')";
mysql_query($insert_query);
$insert_query = "INSERT INTO RunItemTable VALUES('".$RankID."',0,0,0,0,0,0,0,0,0,0)";
mysql_query($insert_query);
die("1");
}
else
{
die("0");
}



?>