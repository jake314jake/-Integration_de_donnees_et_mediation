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
$minSal=$_POST['salaryMin'];
$maxSal=$_POST['salaryMax'];
$DepName=$_POST['Departement'];
try{
    echo "<p>"."test..."."</p>";



$queryThree="SELECT NumEmp , Nom ,Sal FROM  SrcThree.employe \n
NATURAL  JOIN  SrcThree.Salaire
WHERE Sal BETWEEN $minSal AND  $maxSal;";

echo "<p>".$queryThree."</p>" ;


$stmt = $connThree->prepare($queryThree);
$stmt->execute();


displayQueryResultAsTable($connThree->query($queryThree));
echo "<hr>";
$queryTwo = "SELECT NumEmp,NomEmp,NomDept,NumDept FROM SrcTwo.employe 
NATURAL JOIN SrcTwo.Projet 
NATURAL JOIN SrcTwo.Departement
WHERE SrcTwo.Departement.NomDept='$DepName';";
 

echo "<p>".$queryTwo."</p>" ;
$stmt = $connTwo->prepare($queryTwo);
$stmt->execute();


displayQueryResultAsTable($connTwo->query($queryTwo));
echo "<hr>";
$queryOne="SELECT EmpNo,Name,DeptNo,DeptName FROM Emp \n
NATURAL  JOIN WorksIn \n
NATURAL  JOIN  Departement
WHERE DeptName='$DepName';
";
$results = $connOne->query($queryOne);
echo "<p>".$queryOne."</p>" ;
displayQueryResultAsTable($connOne->query($queryOne));


} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}


?>
</body>
</html>