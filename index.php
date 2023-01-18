<?php 
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
	$beerValue = isset($_REQUEST['value']) ? $_REQUEST['value'] : 0;
	$beerCount = isset($_REQUEST['count']) ? $_REQUEST['count'] : 0;
	switch ($action) {
		case 'add':
			$beerCount = $beerCount + 1;
			break;		
		case 'delete':
			$beerCount = ($beerCount > 0) ? $beerCount - 1 : $beerCount;
			break;
	}	 
	$beerTotalValue = $beerValue * $beerCount;
	$formattedBeerTotalValue = number_format($beerTotalValue, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<style>
			* {
				font-family: monospace;
				font-size: xx-large;
				text-align: center;
			}

			button {
				border: none;
				background-color: transparent;
			}
		</style>
		<meta charset="utf-8" />
		<meta name="description" content="um página que registar quantas cervejas foram tomadas">
		<meta name="keywords" content="cerveja, contador de cervejas">
		<title>Beeri</title>
	</head>
	<body>
		<form>
			<p>Valor unitário por birita:</p>
			<input type="number" id="value" name="value" value="<?=($beerValue)?>" step="0.01">
			<p>Total de biritas: <?=($beerCount)?></p>
			<p>Total a pagar: R$ <?=($formattedBeerTotalValue)?></p>
			<input type="hidden" id="count" name="count" value="<?=($beerCount)?>">
			<button type="submit" name="action" value="delete">
				<img src="./assets/images/minus.png" alt="add" style="width: 128px;">
			</button>
			<button type="submit" name="action" value="add">
				<img src="./assets/images/plus.png" alt="add" style="width: 128px;">
			</button>
		</form>
		<br>
<?php for ($i = 1; $i <= $beerCount; $i++) { ?>
		<img src="./assets/images/beer.png" style="width: 254px;">
<?php } ?>
	</body>
</html>
