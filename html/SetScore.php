<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankScore=$_POST["Rank_Score"];
$RankName=$_POST["Rank_Name"];
$RankComment=$_POST["Rank_Comment"];
$RankLastMaze=$_POST["Rank_LastMaze"];
$RankCharacterName=$_POST["Rank_CharacterName"];


mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");


$insert_query = "INSERT INTO	 ScoreTable VALUES(".$RankCharacterName.",'".$RankName."',".$RankScore.",'11:22:33',".$RankLastMaze." ,'".$RankComment."')";
mysql_query($insert_query);
?>