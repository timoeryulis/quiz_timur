<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V18</title>
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
			<form class="contact100-form " name="kalkulator_bmi">
				<span class="contact100-form-title">
				<b>Calculator BMI</b>
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Tinggi Badan harus diisi...">
					<label class="label-input100" for="name">Tinggi Badan</label>
					<input id="name" class="input100" type="text" name="tinggi" placeholder="Dalam (cm)...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100" data-validate="Berat Harus Diisi...">
					<label class="label-input100  validate-input" for="berat">Berat Badan</label>
					<input id="berat" class="input100" type="text" name="berat" placeholder="Dalam (kg)...">
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<a class="contact100-form-btn" onclick="kalkulasi_bmi()">
						Hitung
					</a>
					
				</div>
				<div class="container-contact100-form-btn">
					
					<a class="contact10-form-btn" onclick="bersihkan()">
						Bersihkan
					</a>
				</div><br>
				 <center><img src="images/LoaderIcon.gif" id="loaderIcon"  style="display: none;" /></center>  
			
				<div class="wrap-input100" id="hasil" >
					
				</div>


			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<!-- <form class="contact10-form" name="kalkulator" >
					<span class="contact10-form-title">Hasil Perhitungan</span>
					<table>
						<tr>
							<td> Berat Badan Anda </td>
							<td> &nbsp:&nbsp </td>
							<td> </td>
						</tr>
					</table>
				</form> -->
			</div>
		</div>
	</div>
	




<!--===============================================================================================-->
	<script async='async'  src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script async='async'  src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	

<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script src="js/function.js"></script>


</body>
</html>
