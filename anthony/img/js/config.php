<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','venus');

$conn = mysqli_connect('localhost','root','','venus');
if (!$conn) {
    die("Erreur de connexion a la base de donnees: " .mysqli_connect_error());
}
?>