<?php 
	include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="6">
				<h3><center>DATA</center></h3>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
		</tr>
			<?php 
				
				$qry = mysqli_query($koneksi,"SELECT * FROM Bocah");
				while($data = mysqli_fetch_array($qry)){
			 ?>
		<tr>
			<td><?php echo $data['ID']; ?></td>
			<td><?php echo $data['Username']; ?></td>
			<td><?php echo $data['Password']; ?></td>
			<td><?php echo $data['Level']; ?></td>
			<td><?php echo $data['Fullname']; ?></td>

		</tr>

	<?php  
}
?>
	</table>
</body>
</html>
