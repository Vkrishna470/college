<?php
  include 'config.php';
  	$pull=$_GET['push'];
  	$update="update license_for_hotels_shops_restaurant set status='Accepted' where application_id ='$pull'";
  	$result=mysqli_query($connection,$update);
  	if(!$result)
  	{
  		die(mysqli_error($connection));
  	}
  	else
  	{
  		echo  " <script>
                            window.alert('Data Accepted');
                            window.password ='view_License_certificate(hotels).php';
          </script>";	
        }
?>