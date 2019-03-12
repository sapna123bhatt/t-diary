<!DOCTYPE html>
<html lange="en">
<head>
<meta charset='UTF-8'>
<title>user account</title>
</head>
<body>
<?php foreach($users as $user):

?>
<table>
	<tr>
		<td>
			<?= $user['sapna']?></td>
			<td>
			<?= $user['preeti']?></td>
			<td>
			<?= $user['raj']?></td>
			<td>
			<?= $user['ravi']?></td>
			<td>
			<?= $user['gaurav']?></td>
			<td>
			<?= $user['deepa']?></td>
			<td>
			<?= $user['ajay']?></td>
			<td>
			<?= $user['vijay']?></td>
			<td>
			<?= $user['chitra']?></td>
			<td>
			<?= $user['sanjay']?></td>
			<td>
			<?= $user['suraj']?></td>

			<td>
			<?= $user['bhawna']?></td>
		</tr>
	<?php endforeach;?>
</table>
</body>
</html>

			
