<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Конвертор</title>
	</head>
	<body>
		<h1>Преобразование из дюймов в см</h1>
		<?php
			$ins = 20;
			$cents = $ins * 2.54;
			$cents = round($cents);
		?>
		<p><?php echo $ins ?> дюймов = <?php echo $cents ?> см </p>
		<?php
			$ins = 27;
			$sents = $ins * 2.54;
			$cents = round($sents);
		?>
		<p><?php echo $ins ?> дюймов = <?php echo $cents ?> см </p>
	</body>
</html>