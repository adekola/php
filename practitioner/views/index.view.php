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
	<?php foreach ($tasks as $task) : ?>
		<li>
		<?php if ($task->completed) :?>
			<strike> <?= $task->description ; ?> </strike>
		<?php else: ?>
			<?= $task->description ; ?>
		<?php endif; ?>
		</li>
	<?php endforeach; ?>

</ul>
</body>
</html>