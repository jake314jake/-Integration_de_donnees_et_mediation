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
$queryGlobal="SELECT NomEmp, Salaire, NomDept FROM G.Employe  
NATURAL JOIN G.Departement 
WHERE Salaire BETWEEN $minSal AND  $maxSal  
";
$DepQuery= ($DepName == "") ? $DepName : "AND Departement.NomDept='$DepName';" ;
$queryGlobal=$queryGlobal.$DepQuery;
echo "<p>".$queryGlobal."</p>" ;
echo "<hr>";
$queryThree="SELECT NumEmp , Nom ,Sal FROM  SrcThree.employe  
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
";
 $DepQuery= ($DepName == "") ? $DepName : "WHERE SrcTwo.Departement.NomDept='$DepName';" ;
 $queryTwo=$queryTwo.$DepQuery;

echo "<p>".$queryTwo."</p>" ;
$stmt = $connTwo->prepare($queryTwo);
$stmt->execute();


displayQueryResultAsTable($connTwo->query($queryTwo));
echo "<hr>";
$queryOne="SELECT EmpNo,Name,DeptNo,DeptName FROM Emp  
NATURAL  JOIN WorksIn  
NATURAL  JOIN  Departement
";
$DepQuery= ($DepName == "") ? $DepName : "WHERE DeptName='$DepName';" ;
$queryOne=$queryOne.$DepQuery;
$results = $connOne->query($queryOne);
echo "<p>".$queryOne."</p>" ;
displayQueryResultAsTable($connOne->query($queryOne));


} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}


?>
</body>
</html>