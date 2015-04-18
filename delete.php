<?php
require_once("db.php");
if(isset($_GET['members_id'])){
$id=$_GET['members_id'];
$result=mysql_query("delete from members where members_id=$id");
if($result){
header("Location:index.php?delete=done");
}
else{
header("Location:index.php?delete=no done");
}
}

?>
