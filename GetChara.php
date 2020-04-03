<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankID=$_POST["Rank_ID"];

$data =mysql_query( "SELECT Chara from `MemberTable` WHERE ID = '".$RankID."'; ");

while($result=mysql_fetch_row($data))
echo intval($result[0]);



?>