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
<li>
		<strong> Name:  </strong> <?= $task['title'] ?>
</li>

<li>
		<strong> Due:  </strong> <?= $task['due'] ?>
</li>

<li>
		<strong> Person Responsible:  </strong> <?= $task['assigned_to'] ?>
</li>

<li>
		<strong> Status:  </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
</li>

</ul>

</body>
</html>