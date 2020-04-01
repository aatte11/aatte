<?php


$con = mysqli_connect('localhost','rugnen11','alice0901!','rugnen11');





$query= ("SELECT ScoreTable.CharacterName,ScoreTable.Name, ScoreTable.Score,ScoreTable.ClearTime, ScoreTable.LastStage from (sELECT Name,max(Score)as Score FROM ScoreTable GROUP by Name ) AA inner join ScoreTable on AA.Name=ScoreTable.Name and ScoreTable.Score=AA.score ORDER BY `ScoreTable`.`Score` DESC "); 
$check = mysqli_query($con, $query);



While ($row = mysqli_fetch_array($check))
echo $row['CharacterName'].','.$row['Name'].','.$row['Score'].','.$row['ClearTime'].','.$row['LastStage'].','


?>