<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankID=$_POST["Rank_ID"];
$SelectChara=$_POST["Select_Chara"];


$insert_query = "UPDATE MemberTable set Chara='".$SelectChara."' where ID='".$RankID."' ";
mysql_query($insert_query);
die("1");



?>