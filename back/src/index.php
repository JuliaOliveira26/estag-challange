<?php
header('Content-Type: application/json');
error_log('Sou um log');
echo "Olá mundo";
include_once 'router.php';

$host = "pgsql_desafio";
$db = "applicationphp";
$user = "root";
$pw = "root";

$myPDO = new PDO("pgsql:host=$host;dbname=$db", $user, $pw);
/*
try {
    $pdo = new PDO($myPDO, $user, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());

}
// exemplo de insert
$statement = $myPDO->prepare("INSERT INTO mytable (DESCRIPTION) VALUES ('TEST PHP')");
$statement->execute();

// exemplo de fetch
$statement1 = $myPDO->query("SELECT * FROM mytable");
$data = $statement1->fetch();

echo "<br>";
print_r($data);

// exemplo de fetch2
$statement2 = $myPDO->query("SELECT * FROM mytable");
$data2 = $statement2->fetchALL();

echo "<br>";
print_r($data2);
?>


*/


