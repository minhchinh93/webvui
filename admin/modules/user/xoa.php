<?php 

$id= $_GET['id'];
settype($id, "int");
xoauser($conn,$id);
header ("Location:index.php?module=user" );

?>