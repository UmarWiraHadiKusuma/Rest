<html>
	<head>
		<title>Res CRUD</title>
	</head>
	<body>
		<h1> Add Res</h1>
		<form method="post" action="<?= base_url() ?>index.php/res/addrestdb">
			<input type="text" placeholder="Res Name" name="resName" />
			<input type="text" placeholder="Datares" name"Datares" />
			<input type="submit" />
		</form>

	</body>
</html>