<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test bloc</title>
	<style type="text/css">
		html,
		body {
			margin: 0px;
			height: 100%;
			display: flex;
			width: 100%;
		}

		.bloc1 {
			
			background:gold;
/*			height: 100%;*/
			width: 50%;
		}

		.bloc2 {
			background:rosybrown;
/*			height: 100%;*/
			width: 50%;
		}

		.bloc3 {
			height: 200px;
		}

	</style>
</head>
<body>
	<div class="bloc1">
		 <?php include('menu.php'); ?>
	</div>
	<div class="bloc2">
		<div class="bloc3">
		</div>
	</div>

</body>
</html>