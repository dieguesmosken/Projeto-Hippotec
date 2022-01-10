<?php
include "conexao.php";
$data=array();
$q=mysqli_query($con,"SELECT * from curso");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>