<?php
include __DIR__ . '/actions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма регистрации</title>
	<style>
		label {
			display: block;
			position: relative;
			line-height: 1.5em;
			margin-bottom: 0.7em;
		}

		label input {
			display: block;
			position: absolute;
			left: 100px;
			top: 0;
			border: 1px solid gray;
		}

		label p.error {
			margin: -0.2em 0 0.7em 100px;
			color: red;
		}
	</style>
</head>
<body>
	<h1>Регистрация</h1>
	<?= $form->renderBegin() ?>
		<?= $form->renderFields() ?>

		<button type="submit">Зарегистрироваться</button>
	<?= $form->renderEnd() ?>
</body>
</html>
