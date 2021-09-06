<html>
	<head>
		<title> cargo</title>
	</head>
	<body>
		<h1> Adding car details </h1>

		<div class ="container">
			<form id="contact" action="add1.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					CARID :
							<input type="text" name="di"/>
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

					IMGPATH :
							
    						<input type='file' name='but_upload'/>
    						
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
