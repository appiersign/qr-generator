<!DOCTYPE html>
<html lang="en">
<head>
	<title>PayQR Code Generator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<?php if(!isset($_POST['address'])) {?><form class="contact100-form validate-form" method="post" action="./">
				<p class="contact100-form-title"><img src="images/PayQR-Logo.png" width="300" height="115" alt=""/>
				</p>
				<p class="contact100-form-title">Generate your PayQR 
				</p>
				<div class="wrap-input100 validate-input" data-validate="Please provide the PayLink Address">
					<input id="first-name" class="input100" type="text" name="address" placeholder="Enter PayLink Address">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Generate
					</button>
				</div>
		  </form>
<?php } ?>
			<?php if(isset($_POST['address'])) {?>
							<div class="container-contact100-form-btn">
<p><iframe name="qr" id="qr" width="500px" height="500px" src="./advanced/?data=<?php echo $_POST['address'];?>&level=H&size=10" frameborder="0"></iframe></p>
					<div class="container-contact100-form-btn">
			<a href="./"><button class="contact100-form-btn" type="button">
						Generate Another
						</button></a>
				</div>
			</div>
			
								
			<?php } ?>
		 <?php if(!isset($_POST['address'])) {?> <div class="contact100-form">
				<img src="./images/bg-01.jpg"></div><?php }?>
		</div>
		
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
