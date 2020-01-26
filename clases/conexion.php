<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="mapache";
$pdo = NULL;

try {
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
}
catch (PDOException $e) {
print "¡Error!: " . $e->getMessage() . "
";
die();
}

?>
