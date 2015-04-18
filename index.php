<?php
require_once('db.php');
$result=mysql_query("select * from members");
$row=mysql_fetch_assoc($result);
?>
<h2 align="center">Result of members list</h2>
<table align="center" cellpadding="6" cellspacing="6"class="control"width="800"border="1">
<tr>
<td>Members ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Phone Numbers</td>
<td>Email</td>
<td>Delete</td>
<td>Update</td>
<td>add members</td>

</tr>
<?php do{?>
<tr>
<td><?php echo $row['members_id'];?></td>
<td><?php echo $row['first_name'];?></td>
<td><?php echo $row['last_name'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['Email'];?></td>
<td><a href="delete.php?members_id=<?php echo $row['members_id'];?>">delete</a></td>
<td><a href="update.php?members_id=<?php echo $row['members_id'];?>">update</a></td>
<td><a href="home.php">add members</a></td> 
</tr>
<?php }while($row=mysql_fetch_assoc($result));?>
	</table>
