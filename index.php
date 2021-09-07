<?php
include('data.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission-Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- style.css -->
    <link rel="stylesheet" href="style.css">
    <script src="./main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="header bg-primary">
        <h1 class="text-white text-center">AP RESIDENTIAL SCHOOL</h1>
        <h3 class="text-white text-center">GUNTUR</h3>
        <h4 class="text-white text-center">Admissions : 5th Standard</h4>
    </div>
    <form class="form-block" id="form-details" action="index.php" method="POST"> 
                        <?php
                            include('errors.php');
                         ?>
        <div class="form-group">
            <lable class="tags">First Name</lable>
            <input type='text' class="form-control" id='fname' name='fname'>
        </div>
        <div class="form-group">
            <lable class="tags">last Name</lable>
            <input type='text' class="form-control" id='lname' name='lname'>
        </div>
        <div class="form-group">
            <lable class="tags">MobileNumber</lable>
            
            <input type="tel" id="mobilenumber" name="mobilenumber"  class="form-control" data-validation="number" minlength="10" maxlength="10" required>
        </div>
        <div class="form-group">
            <lable class="tags">Date Of Birth</lable>
            <input type='date' class="form-control" id='date' name='dateofbirth'>
        </div>
        <div class="form-group">
        <label for="gender" class="tags">Choose a Gender:</label>

        <select name="gender">
        <option value="male">male</option>
        <option value="female">female</option>
        </select>
            </div>
        </div>
        <div class="form-group">
            <lable class="tags">Annual Income:</lable>
            <input type='number' class="form-control" id='income' name='income'">
        </div>
        <div class="form-group">
            <lable class="tags">Category</lable>
            <input type='radio' id='res_1' name='reservation' value="15%">&nbsp;
            <label>SC</label>
            <input type='radio' id='res_2' name='reservation' value="7%">&nbsp;
            <label>ST</label>
            <input type='radio' id='res_3' name='reservation' value="27%">&nbsp;
            <label>BC</label><br>
        </div>
        <div class="form-group">
            <lable class="tags">Are You Handicaped?</lable>
            <input type="checkbox" id="yes" name="handicap[]" value="Yes">&nbsp;
            <label for="vehicle1"> Yes</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" id="submit" onclick="return validate();">Submit</button>
    </form>
    <!-- main.js -->
    <script src="./main.js"></script>

<script>
    $('#income').keyup(function(){
  if ($(this).val() > 100000){
    alert("income should be lessthan 1lakh");
    $(this).val('100000');
  }
});
</script>
<script>

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("date").setAttribute("max", today);
   
</script>
<footer class="footer">
	<div class="footer-body">
        <div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">About us</h4>	
						<div class="footer-section-body">
							<p>AP RESIDENTIAL SCHOOL</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Quick Links</h4>	
						<div class="footer-section-body">
							<ul class="list-links">
								<li><a href="activities.html">Activities</a></li>
								<li><a href="PrivacyPolicy.html">Privacy policy</a></li>
								<li><a href="T&C.html">Terms&Conditions</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">FACULTY</h4>
						<div class="footer-section-body">
							<p>EXPRIENCED FACULTY</p>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Contact Us</h4>
						<div class="footer-section-body">
							<p><b><i class="fa fa-map-marker"></i> Address:</b>AP RESIDENTIAL SCHOOL,GUNTUR</p>
							<div class="footer-contacts">
								<p>
									<b>
										<i class="fa fa-phone"></i> Phone:
	</b>+91 9000000000 <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08656-000000
								</p>
								<p>
									<b>
										<i class="fa fa-envelope-o"></i> Email:
									</b>residentialschool@gmail.com <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									School@gmail.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

	<div class="bwt-footer-copyright">
		<div class="container">
			<div class="row">
			</div>
        </div>
    </div>
</footer>

</body>
</html>