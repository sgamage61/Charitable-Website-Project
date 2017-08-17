<?php
    $con=new mysqli('localhost','root','','Donors');
    $emailSubject = 'Donate to Sri Lankan Schools Today';
    $webmaster='sgamage61@gmail.com';
    
    
    $name=$_POST['requestid'];
    $description=$_POST['donorid'];
    $location=$_POST['phase1'];
    $request_type=$_POST['phase2'];
    $nature=$_POST['acknowledgement'];
    //$sql = "DELETE FROM UserInformation WHERE UserID=920";
   // $sql="INSERT INTO ProjectTable(ProjectID,RequestID,DonerID,Phase1,Phase2,Acknowledgement,Pictures)
  //VALUES (UUID(),'$name','$description','$location','$request_type','$nature','$estimate','$phases','$status','$approver','$date')";
    
$con->query($sql);

    


?>