<?php


$con = mysqli_connect('localhost','rugnen11','alice0901!','rugnen11');

$RankID=$_POST["Rank_ID"];





$query= ("SELECT Score,LastStage FROM`ScoreTable` WHERE Name='".$RankID."' ORDER BY `Score` DESC Limit 10 ;"); 
$check = mysqli_query($con, $query);



While ($row = mysqli_fetch_array($check))
echo $row['Score'].','.$row['LastStage'].','


?>