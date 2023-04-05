<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href="./styleTest.css">
</head>
<body>
<?php
include "./connection.php";
include "./functions.php";
try{
    echo "<p>"."test..."."</p>";

$queryTwo="SELECT * FROM  SrcTwo.employe \n
NATURAL  JOIN SrcTwo.Projet \n
NATURAL  JOIN SrcTwo.Departement ";
echo "<p>".$queryTwo."</p>" ;
$stmt = $connTwo->prepare($queryTwo);
$stmt->execute();


displayQueryResultAsTable($connTwo->query($queryTwo));
echo "<hr>";
$queryThree="SELECT * FROM  SrcThree.employe \n
NATURAL  JOIN  SrcThree.Salaire";
$stmt = $connThree->prepare($queryThree);
$stmt->execute();
echo "<p>".$queryThree."</p>" ;

displayQueryResultAsTable($connThree->query($queryThree));
echo "<hr>";
$queryOne="SELECT * FROM Emp \n
NATURAL  JOIN WorksIn \n
NATURAL  JOIN  Departement
";
$results = $connOne->query($queryOne);
echo "<p>".$queryOne."</p>" ;
displayQueryResultAsTable($connOne->query($queryOne));
echo "successfully";
} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}


?>
</body>
</html>