<?php
$con = mysql_connect('localhost','rugnen11','alice0901!');
$dbname='rugnen11';
$son=mysql_select_db($dbname,$con);

$ItemID=$_POST["Item_ID"];
$ZenValue=$_POST["Zen_Value"];
$SoulstoneValue=$_POST["Soulstone_Value"];
$RankID=$_POST["Rank_ID"];

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

if($ItemID==1)
{
$insert_query = "UPDATE RunItemTable SET Weapon = Weapon +1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==2)
{
$insert_query = "UPDATE RunItemTable SET Top = Top+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==3)
{
$insert_query = "UPDATE RunItemTable SET Bottom = Bottom+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==4)
{
$insert_query = "UPDATE RunItemTable SET Head = Head+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==5)
{
$insert_query = "UPDATE RunItemTable SET Foot = Foot+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==6)
{
$insert_query = "UPDATE RunItemTable SET Necklace = Necklace+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==7)
{
$insert_query = "UPDATE RunItemTable SET Earring = Earring+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}
if($ItemID==8)
{
$insert_query = "UPDATE RunItemTable SET Ring = Ring+1,Zen = Zen-'".$ZenValue."',Soulstone=Soulstone-'".$SoulstoneValue."' WHERE id = '".$RankID."';";
mysql_query($insert_query);
}

?>