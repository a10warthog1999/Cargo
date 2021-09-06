<html>
	<head>
		<title>cargo</title>
	</head>
	<body>
		<h1> updating car </h1>

	<?php
		$mid=$_POST['mid'];

		print("updating car details $mid </br>");

		?>

		<div class="container">
			<form id="contact" action="mod4.php" method="POST">
				<fieldset>
					CARID :
							<input type="text" name="mi" value="<?php echo $mid; ?>"/>
							<br><br>
				</fieldset>
				<fieldset>
				NAME :
						<input type="text" name="name"/>
						<br><br>
						</fieldset>

						<fieldset>
				PRICE :
					<input type="text" name="pr"/>
					<br><br>
				</fieldset>

				<fieldset>
					<button name="sub" type="submit" id="contact-submit">
						SUBMIT
					</button>
				</fieldset>
			</form>
		</div>
	</body>
	</html>
	
