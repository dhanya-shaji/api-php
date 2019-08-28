<?php
$servername="localhost";
$username="root";
$password="";
$database="api";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
	die("conection failed".mysqli_connect_error());
}
if($_GET['type']=="getCatById"){
    $id=$_GET['cateid'];
$sql="SELECT * from categories where id=$id";

$result = mysqli_query($conn, $sql);
$dbdata=array();

if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $dbdata[]=$row;
    }
    echo json_encode($dbdata);
}
 else {
    echo "0 results";
}  
}else if($_GET["type"]=="prod")
{
}


?>