<?php
include_once('db.php');
$id=$_GET['members_id'];
$result=mysql_query("select * from members where members_id=$id");
$row=mysql_fetch_assoc($result);
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql="update members set first_name='$fname',last_name='$lname',phone='$phone',Email='$email'where members_id ='$id'";
$result=mysql_query($sql);
if($result){
	header('Location:index.php');
}

}
?>
<html>
<body>
<div align="center">
	<h1>Update of members list</h1>
<form method="post">
First Name:<br><input type="text" name="fname" value="<?php echo $row['first_name'];?>"><br>
Last Name:<br><input type="text" name="lname"value="<?php echo $row['last_name'];?>"><br>
Phone Numbers:<br><input type="text" name="phone"value="<?php echo $row['phone'];?>"><br>
Email address:<br><input type="text" name="email"value="<?php echo $row['Email'];?>"><br>
<input type="submit" name="submit" value="update members">

</form>
</div>
</body>

</html>
