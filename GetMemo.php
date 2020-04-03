<?php
$con = mysqli_connect('localhost','rugnen11','alice0901!','rugnen11');





$query = ("SELECT Memo from (SELECT Name, max(score) FROM ScoreTable GROUP by Name ) AA inner join MemberTable on AA.Name=MemberTable.id ORDER BY `max(score)` desc " );

$check = mysqli_query($con, $query);


While ($row = mysqli_fetch_array($check))
echo $row['Memo'].','


?>
