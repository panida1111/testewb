<?php
echo "test<br>";
$mysqli = new mysqli("localhost","test_2_admin", "UXJvgOjbog82hxyR","test_2");

if($mysqli->connect_errno){
    echo "Failed to connect to MySQL: ".$mysqli ->connect_error;
    exit();
}else{
    echo "Db Connected";
}
?>