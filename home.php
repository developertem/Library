<?php
include_once('db.php');
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql="insert into members(members_id,first_name,last_name,phone,email) values(null,'$fname','$lname','$phone','$email')";
$result=mysql_query($sql);
if($result){
header("Location:index.php");	
}
}
?>
<html>

<body>
<div align="center">
	<h1>member add to list library</h1>
<form method="post">
First Name:<br><input type="text" name="fname"><br>
Last Name:<br><input type="text" name="lname"><br>
Phone Number:<br><input type="text" name="phone"><br>
Email:<br><input type="text" name="email"><br>
<input type="submit" name="submit" value="add member">

</form>
</div>
</body>

</html>
