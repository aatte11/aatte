<?php
//Step1
 $db = mysqli_connect('localhost','rugnen11','alice0901!','rugnen11')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>진따피하기  랭킹</h1>
<br>
<h2>계정랭킹</h2>
   최고점수&nbsp;&nbsp;&nbsp;닉네임<br>
<?php
//Step2



$query = "(select  MAX(Score),Ip from JinTable group by Ip) ORDER BY MAX(Score) DESC";
mysqli_query($db, $query) or die('Error querying database.');



//Step3
$result = mysqli_query($db, $query);





while ($row = mysqli_fetch_array($result)) {
 echo ' &nbsp; ' .$row['MAX(Score)'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['Ip'] . '   <br />';


}











//Step 4
mysqli_close($db);
?>













</body>
</html>





<?php
//Step1
 $db = mysqli_connect('localhost','rugnen11','alice0901!','rugnen11')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
<br><br><br>
 <h2>전체랭킹</h2>
   &nbsp;&nbsp;&nbsp;&nbsp;캐릭터&nbsp;&nbsp;&nbsp; 점수&nbsp;&nbsp;&nbsp;닉네임<br>
<?php
//Step2



mysqli_query($db, "set @num:=0");
mysqli_query($db, "UPDATE  JinTable Set Rank=0;");
$query = "SELECT @curRank := @curRank + 1 AS Ranking, Score,Chara,Ip FROM `JinTable`, (SELECT @curRank := -1) Ranking ORDER BY `Score` DESC Limit 101 ";
mysqli_query($db, $query) or die('Error querying database.');



//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo '' . $row['Ranking'] . ' &nbsp;  ' . $row['Chara'] . '&nbsp;&nbsp;&nbsp;' .$row['Score'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['Ip'] . '   <br />';


}
//Step 4
mysqli_close($db);
?>

</body>
</html>