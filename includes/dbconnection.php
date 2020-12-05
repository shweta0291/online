<?php 
// DB credentials.
define('DB_HOST','database-1.c0ioknt4akb6.us-east-1.rds.amazonaws.com');
define('DB_USER','shweta');
define('DB_PASS','12345678');
define('DB_NAME','ofsmsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
