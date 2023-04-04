<?php 
$host = 'localhost';
$dbTwo   = 'srctwo';
$dbThree   = 'srcthree';
$user = 'root';
$pass = '';
$port = "4306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsnTwo = "mysql:host=$host;dbname=$dbTwo;charset=$charset;port=$port";
$dsnThree = "mysql:host=$host;dbname=$dbThree;charset=$charset;port=$port";
try {
    echo "<h1>"."Loading..."."</h1>";
    
     $connOne = new  \PDO('sqlite:C:\xampp\htdocs\GUI\includes\db\SrcOne.db');
     $connTwo = new \PDO($dsnTwo, $user, $pass, $options);
     $connThree = new \PDO($dsnThree, $user, $pass, $options);
     
     
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>