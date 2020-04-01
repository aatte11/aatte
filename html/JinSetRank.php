<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankNum=$_POST["Rank_Num"];
$RankIp=$_POST["Rank_Ip"];
$RankChara=$_POST["Rank_Chara"];


mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");


$insert_query = "INSERT INTO JinTable VALUES(0,'".$RankNum."','".$RankIp."','".$RankChara."')";
mysql_query($insert_query);
?>