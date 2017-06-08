<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
	<link rel="stylesheet" type="text/css" href="../../../filesOfSystem/css/bootstrap.css">



	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.style1{
			padding-top: 300px;
		}
		.stylepaddingLogin{

			padding-top: 200px;
			padding-left: 10%;
			padding-right: 10%;
			padding-bottom: 20% ;
		}
		.stylePaddinglabelLogin{
			padding-left: 1%;	
		}
		body{
			background-image: url("../images/fundoLogin.jpg");
		}
		.tituloDoLogin{
			padding: 10px;
			background-color: #fff;
		}
		.styleDoContainer{

			background-color: #9EDCFD;
			border-style: solid; 
			border-width: 15px; 
			border-color: white;
		}

	</style>
</head>
<body>
	<div class="container styleDoContainer">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4" > </div>
			<div class="col-md-4 col-sm-4 col-xs-4 text-center"><div class="tituloDoLogin"> Requirement System</div></div> 
			<div class="col-md-4 col-sm-4 col-xs-4" > </div>		
		</div>

		<div class="row">
			<div class="col-md-11 col-sm-10 col-xs-9"></div>
			<div class="col-sm-1 col-sm-2 col-xs-3"><a href="../signup/signupSCREEN.php">You dont have account?</a></div>


		</div>
		<div class="row stylepaddingLogin" name ="PARA LOGIN ">
			<div class="col-md-4 col-sm-4 col-xs-2 configdiv"></div>
			<div class="col-md-4 col-sm-6  col-xs-6 text-center configdiv">
				
				<form class="form-inline" action="teste.php" method="post">
					<div class="form-group">
						<div class="stylePaddinglabelLogin">
							<label for="exampleInputName2">User</label></div>
							<input type="text" class="form-control" id="exampleInputName2" placeholder="your username" name="User">
						</div>
						<div class="form-group">
							<div class="stylePaddinglabelLogin">
								<label for="exampleInputName2">Password</label></div>
								<input type="password" class="form-control" id="exampleInputPassword3" placeholder="" name="Password">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> 

									remember me

								</label>
							</div>
							<button type="submit" class="btn btn-default">Sign in</button>
						</form>		

					</div>
					<div class="col-md-4 col-sm-3 col-xs-4 configdiv"></div>
				</div>
			</div>
		</body>
		</html>