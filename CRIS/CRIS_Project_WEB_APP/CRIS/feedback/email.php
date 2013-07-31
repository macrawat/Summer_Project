<?php
   
  include '../main/php/db_con.php';

   $feedback= $_POST["message"];
   $company=$_POST["company"];
   $website= $_POST["website"];
   $name = $_POST["your-name"];
   $to = $_POST["your-email"];
   
   if ($name==""){

      $result=mysqli_query($con,"SELECT * FROM feedback WHERE EMAIL='$to' ");
      if (mysqli_fetch_array($result)==0){
      $name="Subscriber";
      $feedback="Subscribe me for any updates";
       }
       else{
        echo "You are already subscribed for Updates";
         exit;
       }
   }

   $sql= "INSERT INTO feedback (NAME, EMAIL, WEBSITE, COMPANY, FEEDBACK)
           VALUES ('$name', '$to', '$website', '$company', '$feedback')";

 if (mysqli_query($con,$sql))
   {
   echo "Feedback Recieved successfully"."<br/>";
    }
  else
  {
  echo "Error creating Feedback " . mysqli_error($con);
  }
   
   $subject = "Crop Information System";
   $message = "Dear ".$name.",\n Your feedback has been recorded.\n Thank you for using the Crop Information System.\n\n Team CIS  ";
   $header = "From:sharad.mishra@iic.ac.in\r\n";
   
   $retval = mail($to,$subject,$message,$header);
   
   if( $retval == true )  
   {
      echo "Query sent successfully!";

   }
   else
   {
      echo "Query could not be sent!";
   }


?>
<script type="text/javascript">
var howLongToWait = 2; //number of seconds to wait
var urlOfRedirectLocation = '../main/index.php';
function startRedirect() {
window.location = urlOfRedirectLocation;
}
setTimeout('startRedirect()', howLongToWait * 1000);
</script>
