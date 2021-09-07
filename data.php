<?php
session_start();
$errors =array();
$url='localhost';
$username='root';
$password='';
$con=mysqli_connect($url,$username,$password,"admission-form");


if(isset($_POST["submit"])){
  
   $firstname        = $_POST['fname'];
   $lastname        = $_POST['lname'];
   $dob       = $_POST['dateofbirth'];
   $income    = $_POST['income'];
   $gender     = $_POST['gender']?? "";
   $mobilenumber           = $_POST['mobilenumber'];
   $reservation     = $_POST['reservation']?? "";
   $cap            = $_POST['handicap']?? "";
   

   $chk="";  
    foreach($cap ?: [] as $chk1)  
    {  
       $chk .= $chk1.",";  
    } 
    if (count($errors) ==0) {
        
          $query_details = "INSERT INTO form (firstname,lastname,mobilenumber,gender,age,income,reservation,handicap) 
                  VALUES ('$firstname','$lastname','$mobilenumber','$gender','$dob','$income', '$reservation','$chk')";
          $query_run=mysqli_query($con,$query_details);
    }
    $query6= "SELECT * FROM  form";
$query_run6 = mysqli_query($con, $query6);
while($result6 = mysqli_fetch_assoc($query_run6))

{
    $name=$result6['firstname'];
    $age= $result6['age']; 
    $mny= $result6['income']; 
    $category=$result6['reservation'];
    $handicap=$result6['handicap'];
    $diff = abs(strtotime($age) - strtotime(date("Y-m-d h:i:s"))); 
    $years = floor($diff / (365*60*60*24));
    $value="4";
    $new_value=$category+$value;
   
} 
// if($mny >100000) 
// {
//     array_push($errors,"Annual Income should not be greater than 100000");
// }
if($years >=10 && $years <=12 )
    {
        $_SESSION['name']=$firstname;
//   if($query_run)
//   {
    
//     //   header("Location:index.php");
//       exit();
    
//   }
//   else
//   {
      
//       //nothing
//   }
  
}


  else
  {
      echo "<script>alert('Your age should between 10-12 years only')</script>";
  }
}
$query7= "SELECT * FROM  form";
$query_run7 = mysqli_query($con, $query7);
while($result7 = mysqli_fetch_assoc($query_run7))

{
    $firstname=$result7['firstname'];
    $lastname=$result7['lastname'];
    $age= $result7['age']; 
    $mny= $result7['income']; 
    $category=$result7['reservation'];
    $handicap=$result7['handicap'];
    $diff = abs(strtotime($age) - strtotime(date("Y-m-d h:i:s"))); 
    $years = floor($diff / (365*60*60*24));
    $value="4";
    $new_value=$category+$value;
    if( $handicap == 'Yes,' && $category=='15')
    {
        $query_update="UPDATE form SET reservation='19' where firstname='$firstname'";
        $query_update_run=mysqli_query($con,$query_update);
    }
    if( $handicap == 'Yes,' &&  $category=='7')
    {
        $query_update1="UPDATE form SET reservation='11' where firstname='$firstname'";
        $query_update_run1=mysqli_query($con,$query_update1);
    }
    
}


?>