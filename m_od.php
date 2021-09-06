<html>
	<head>
		<title>cargo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<style>
		body {background-image:url("1357867.gif");}
		.center {
  display: flex;
  justify-content: center;
  align-items: center;
	</style>
	<body>
		<div class="container">
  <h1 align="center"><a href="index2.php">UPDATE CAR</h1></a>
  <br><br>
  <!-- Button to Open the Modal -->
  <div class="center">
  <button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
      


		 <div class="modal-header">
          <h4 class="modal-title">UPDATING CAR</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

	</head>
	<body>


	<?php
		$mid=$_POST['mid'];

		print("updating car details $mid </br>");

		?>

		<div class="container">
			<form id="contact" action="mod2.php" method="POST">
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
	
