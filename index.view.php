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

<?php foreach ($person as $feature => $value) : ?> 
	<li> <strong> <?= $feature ?> </strong> <?= $value; ?> </li>
<?php endforeach; ?>

</ul>

</body>
</html>