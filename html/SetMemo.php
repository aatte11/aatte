<?php
$con = mysqli_connect('localhost','rugnen11','alice0901!','rugnen11');

$RankID=$_POST["Rank_ID"];
$InputMemo=$_POST["Input_Memo"];
$InputGet=$_POST["Input_Get"];


if($InputGet=="Set")
{
$query = "UPDATE MemberTable set Memo='".$InputMemo."' where ID='".$RankID."' ";
mysqli_query($con, $query);
}


if($InputGet=="Get")
{
$query = "SELECT Memo from MemberTable where ID='".$RankID."' ";
$check = mysqli_query($con, $query);

While ($row = mysqli_fetch_array($check))
echo $row[0] ;
}

?>