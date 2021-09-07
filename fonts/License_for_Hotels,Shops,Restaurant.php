<!doctype html>
<html>
<head>
	<title>License_for_hotels_shops_restaurant</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		body{
		}
		.a{
			height:850px;
			background-size:cover;
			color:white;
			background-repeat:no-repeat;

		}
		
		.b2{
			background-color:rgba(0,0,0);
		}
		.form{
			height:600px;
			padding-top:60px;
		}
		
		.d{
			color:black;
			padding-top:20px;
		}
		#city{
			padding:5px;
		}

		#state{
			padding:5px;
		}
		.panel{	
			background-color:black;
			height:50px;
			
		}
		.panel-title{
			color:white;
			font-weight:bold;
			font-size:20px;
			height:30px;
			text-align: center;

		}
		input
		{

			color: white;
		}

		
	</style>
</head>
<body>
	<div class="a container-fluid">
		<div class="row">
		
		<div class="col-sm-offset-2 col-sm-8">
					<nav class="navbar navbar-inverse navbar-fixed-top">
						<div class="container-fluid demo">
							<div class="navbar-header">
								<button class="navbar-toggle" data-toggle="collapse" data-target="#cl1">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span></button>
							</div>
							<div class="collapse navbar-collapse" id="cl1">
								<ol class="nav navbar-nav" >
									<li><a href="#">HOME</a></li>
									<li><a href="#">ABOUT</a></li>
									<li><a href="#">REGISTRATION</a></li>
									<li class="active"><a href="#">SERVICES</a></li>
									<li><a href="#">CAREERS</a></li>
									<li><a href="#">BLOG</a></li>
									<li><a href="#">FAQ'S</a></li>
									<li><a href="#">CONTACT</a></li>
								</ol>
							</div>
						</div>
					</nav>
				
				</div>

					


			<div class="form col-sm-offset-3 col-sm-6">
				<div class="panel">
					<div class="panel-heading">
							
						<h1 class="panel-title" ><span class="fa fa-user"></span> &nbsp </h1>
					</div>

					<div class="b2 panel-body">
						<form method="POST" 	action="License_for_Hotels,Shops,Restaurant(db).php" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">	
							
								<div class="col-sm-6">
								<label>Application ID</label>
								<input type="text" required name="application_id" class="form-control disabled" />
								</div>
								
								<div class="col-sm-6">
								<label>Type of Application</label>
								<input type="text" required name="type_of_application" class="form-control" />
								</div>
							
						</div>
							<div class="form-group">
							
								<div class="col-sm-12">
									<label>Shop Name</label>
									<input type="text" name="shop_name"  class="form-control" required />
								</div>
								
						
							</div>
							<div class="form-group">
									<div>
										<div class="col-sm-12">
										<label>Shop Address</label>
										<textarea rows="5" name="shop_address" cols="25" class="form-control" required ></textarea>
										</div>
									</div>
							</div>
						<div class="form-group">
							
								<div class="col-sm-12">
									<label>Purpose Of Business</label>
									<select name="purpose_of_business" class="form-control" > 
												
												<option>S-E-L-E-C-T</option>
												<option value="Ground floor">Bakery</option>
												<option value="First floor"> Restaurantr</option>
												<option value="Second floor">Grocery </option>
												<option value="others" > other </option>
												
											</select>
								</div>
								
						
							</div>
						<div class="form-group">
						
								<div class="col-sm-12">
								<label>Upload Building Tax</label>
								<input type="file" name="upload_building_tax"  class="form-control" required />
								</div>
								
							
						</div>
							



					
							
						
					
						<input type="submit" value="submit" class="btn btn-block btn-success"/>
					</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>