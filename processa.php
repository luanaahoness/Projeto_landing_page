<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$interest = $_POST['interest'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db_my_house";

    $conn = new mysqli($servername,$username, $password,$db_name);

    $query='SELECT * FROM db_my_house';

    $resultado=$conn->query($query);
        if($resultado->num_rows > 0) {
            $dados=array();
            while($row = $resultado->fetch_assoc())
            {
                $dados[]=$row;

            }
            $resultado->close();
        }






?>