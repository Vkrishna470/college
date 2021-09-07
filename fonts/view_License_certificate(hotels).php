<!doctype html>
<html>
<head>
	<title>tableform</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css"/>
	<style>
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
							<div class="table table-responsive">
								<table class="table table-condensed">
									<thead>				
								
										<tr>
											<th>Application_id</th>
											<th>Application Type</th>
											<th>shop_name</th>
											<th>shop_address</th>
											<th>purpose_of_business</th>
											<th>upload_building_tax</th>
											<th>Status</th>

											
											
										</tr>
									</thead>
									<tbody>

														<?php
														
															include 'config.php';

																				/*update promo*/
																		$select="select * from license_for_hotels_shops_restaurant where  status='pending'";
																				$result=mysqli_query($connection,$select);
																				if(!$result)
																				{
																					die(mysqli_error($connection));
																				}
																				else
																				{
																					while($var=mysqli_fetch_assoc($result))
																				{
																
																					$application_id=$var['application_id'];
																					$type_of_application=$var['type_of_application'];
																					$shop_name=$var['shop_name'];
																					$shop_address=$var['shop_address'];
																					$purpose_of_business=$var['purpose_of_business'];
																					$upload_building_tax=$var['upload_building_tax'];
																					$status=$var['status'];
																				
															
															?>																														


										<tr>
												
												<td><?php echo "$application_id" ?></td>
												<td><?php echo "$type_of_application" ?></td>
												<td><?php echo "$shop_name" ?></td>
												<td><?php echo "$shop_address" ?></td>
												<td><?php echo "$purpose_of_business" ?></td>
												<td><?php echo "$upload_building_tax" ?></td>
												<td><?php echo "$status" ?></td>
												<td><a href="accept_License_certificate(hotels).php?push=<?php echo "$application_id" ?>" class="btn btn-success btn-block" >Accept</a><br/>
												<a href="reject_License_certificate(hotels).php?push=<?php echo "$application_id" ?>" class="btn btn-danger btn-block" >Reject</a></td>


										</tr>
									</tbody>

								
						<?php }} ?>
					</table>

			</div>
		</div>
	</div>
</div>
</body>
</html>
	