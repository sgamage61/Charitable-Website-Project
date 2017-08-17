<?php
    $con=new mysqli('localhost','root','','Donors');
    $emailSubject = 'Donate to Sri Lankan Schools Today';
    $webmaster='sgamage61@gmail.com';
    
    
   
    $name= $_POST['name'];
    $address=$_POST['address'];
    $province=$_POST['province'];
    $district=$_POST['district'];
    $city=$_POST['city'];
    $job=$_POST['jobtitle'];
    $company=$_POST['company'];
    $contactInfo=$_POST['contact'];
    
  //  $sql = "DELETE FROM UserInformation WHERE UserID=7";
    $sql="INSERT INTO UserInformation(UserID,Name,Address,Province,District,City,Job_Title,Company,Contact_Info)
  VALUES (UUID(),'$name','$address','$province','$district','$city','$job','$company','$contactInfo')";
    
$con->query($sql);

    


?>