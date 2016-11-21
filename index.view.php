<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>

	<style type="text/css">
		header{
			background-color: : #e3e43;
			padding: 3em;
			text-align: center;
		}
	</style>
</head>
<body>

<ul>


		<?php foreach ($names as $name): ?>

			<li> <?= $name; ?> </li>

		<?php endforeach; ?>

		<?php foreach ($names as $name) {

			echo "<li>$name</li>";

		}
		?>

</ul>

</body>
</html>