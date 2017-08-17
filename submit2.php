<?php
    $con=new mysqli('localhost','root','','Donors');
    $emailSubject = 'Donate to Sri Lankan Schools Today';
    $webmaster='sgamage61@gmail.com';
    
    
    $name=$_POST['name'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $request_type=$_POST['type'];
    $nature=$_POST['nature'];
    $estimate=$_POST['estimate'];
    $phases=$_POST['phases'];
    $status=$_POST['status'];
    $approver=$_POST['approver'];
    $date=$_POST['date'];
    //$sql = "DELETE FROM UserInformation WHERE UserID=920";
    $sql="INSERT INTO ProjectRequestTable(Request_ID,Name,Description,Location,Request_Type,Nature,Estimate,Phases,Status,Approver,Date)
  VALUES (UUID(),'$name','$description','$location','$request_type','$nature','$estimate','$phases','$status','$approver','$date')";
    
$con->query($sql);

    


?>