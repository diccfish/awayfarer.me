<?php

	$pageTitle = "Ckay Travel";
	$section = "home";
	include('app/config.php');
	include('app/header.php');
	include('insert.php');
?>

	<div class="wrapper">
		<form action="insert.php" method="post">
			Code: <input type="text" name="code">
			Name: <input type="text" name="name">
			<br />
			Party: <input type="text" name="party">
			Family: <input type="text" name="family">
			<input type="submit">
		</form>
	</div>
			
<?php include('app/footer.php') ?>