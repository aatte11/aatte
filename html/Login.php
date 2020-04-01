<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$RankID=$_POST["Rank_ID"];
$RankPW=$_POST["Rank_PW"];


mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");


$check=mysql_query("SELECT * FROM `MemberTable` where ID='".$RankID."'");

$numrows = mysql_num_rows($check);    
if ($numrows == 0)
{
	
	die("01");


}

else
{

  while($row = mysql_fetch_assoc($check))
  {
	if($RankPW == $row['PW'])
	{	
	//정보를 불러온다. 
	die("1");
	
	
	}
	
	else
		die("02");
   }

}

?>