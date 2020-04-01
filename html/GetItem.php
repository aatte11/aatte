<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankID=$_POST["Rank_ID"];

$data =mysql_query( "SELECT * FROM `RunItemTable` WHERE id = '".$RankID."'; ");

while($result=  mysql_fetch_array($data))
for($i=0;$i<11;$i++)
echo $result[$i],",";



?>