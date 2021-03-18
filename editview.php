<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo site_url(); ?>/studentcontroller/viewstu">View Record </a>
<form action="<?php echo site_url(); ?>/studentcontroller/updatelogic" method="post">

<table>
	
<tr><td>Enter Rno</td><td><input type="text" name="txtrno" value="<?php echo $data[0]['rno']; ?>"></td></tr>
<tr><td>Enter Name</td><td><input type="text" name="txtname" value="<?php echo $data[0]['sname']; ?>" /></td></tr>	
<tr><td></td><td><input type="submit" name="btnsubmit" value="Update" /></td></tr>
</table>

</form>
	
</body>
</html>