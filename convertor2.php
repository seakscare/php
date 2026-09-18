<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Конвертор</title>
	</head>
	<body>
		<h1>Преобразование из дюймов в см</h1>
		<?php
			$aIns = [19, 20, 24, 27, 32, 45, 80];
			$cnt = count($aIns);
			for ($i = 0; $i < $cnt; $i++) {
				$ins = $aIns[$i];
				$cents = $ins * 2.54;
				$cents = round($cents);
		?>
		<p><?php echo $ins ?> дюймов = <?php echo $cents ?> см </p>
		<?php } ?>

	</body>
</html>