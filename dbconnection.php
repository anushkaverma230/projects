
 <!-- procedural method-->
<?php
$name = "localhost";
$data_name = "root";
$data_pass = "";
$data_proName = "projectphpsql";

$conn = mysqli_connect($name, $data_name , $data_pass , $data_proName);

if(!$conn){
    echo "error in database connection";
}
else {
    echo "connection done";
}


?>