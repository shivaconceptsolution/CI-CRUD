<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1">
	<tr><th>RNO</th><th>SNAME</th></tr>
	<?php
	echo "<tr>";
	foreach ($data as $k) {
		$r=$k['rno'];
		foreach ($k as $v) {
			echo "<td>".$v."</td>";
		}

		echo "<td><a href='".site_url()."/studentcontroller/findstudent/".$r."'>EDIT</a> || <a href='".site_url()."/studentcontroller/deletestudent/".$r."'>DELETE</a></td>";
		echo "</tr>";
	}
    
	?>

</table>
	

</body>
</html>