<?php


if(isset($_POST['save'])){
   
      $msg=insert_data();
      
}
function insert_data(){
  include("dbconnection.php");
     

     
  date_default_timezone_set('Asia/Kolkata');
     
  $date=date( 'Y-m-d'); 

date_default_timezone_set('Asia/Kolkata');
$currentDateTime=date('H:i:s');
$time = date('h:i A', strtotime($currentDateTime));
      $source = ($_POST['sources']);
      $mobile = ($_POST['mobile_number']);
      $service=($_POST['service']);
      $status=($_POST['status']);

      $query="INSERT INTO leads (date,time,sources,mobile_number,service,status)
       VALUES ('$date','$time','$source','$mobile','$service','$status')";
       //echo $query;die();
      $exec= mysqli_query($con,$query);
     
      if($exec==true)
    {

      //$msg = $date;
      echo "<script>alert('New Leads created successfully');</script>";
      echo "<script>window.location.href ='leads.php'</script>";

    }
    else
    {
      $msg = 'Fail';
    }


}

?>