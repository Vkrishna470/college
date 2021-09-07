<?php
include('data.php')
?>

<?php
$query = "SELECT * FROM form ORDER BY RAND() LIMIT 80";
$query_run = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission-form</title>
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
        <h1 class="text-white text-center">AP Residential School</h1>
    </div>
    <button type="button" class="btn btn-warning show" id="hide" onclick="show()">Take Lottery</button>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
   <tr>
        <th id="" name="id">S.NO</th>
      <th id="fname" name="fname">firstname</th>
      <th id="fname" name="fname">lastname</th>
      <th id="lname" name="lname">Mobile Number</th>
      <th id="email" name="email">Message</th>
     
   </tr>
</thead>

<tbody>
<?php
         if(mysqli_num_rows($query_run) > 0)        
         {
             while($row = mysqli_fetch_assoc($query_run))
             {
         ?>
   <tr>
   <td><?php  echo $row['id']; ?></td>
   
  
                 <td><?php  echo $row['firstname']; ?></td>
                 <td><?php  echo $row['lastname']; ?></td>
                 <td><?php  echo $row['mobilenumber']; ?></td>
                 <td><?php  echo 'Addmission Confirmed'; ?></td>
                
   </tr>
</tbody>
<tfoot>
   <?php
             } 
         }
         else {
             echo "No Record Found";
         }
         ?>
</tfoot>
</table>
<!-- main.js -->
<script src="./main.js"></script>
        </body>
        </html>
