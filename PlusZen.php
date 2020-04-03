<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankPlusZen=$_POST["Rank_PlusZen"];
$RankName=$_POST["Rank_Name"];


mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");


$insert_query = "update RunItemTable set Zen=zen+".$RankPlusZen." where id='".$RankName."';";
mysql_query($insert_query);
?>