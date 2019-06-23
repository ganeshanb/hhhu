<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Lead</title>
  <meta charset="utf-8"> 
  <?php 
$msgsuccess='';
$msgerror='';
if(isset($_POST['btnsave'])) {
$email = $_POST['lead_email'];
//echo $email;
$to = $email;
$subject = 'Thank you for contacting ABC';
$from = 'pratishbhosale@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Thank you for submmiting your enquiry with us. We will contact you as soon as possible</h1>';
$message .= '<br>';
$message .= '<b>Thanking you,</b>';
$message .= '<br>';
$message .= '<b>ABC Structural Steels Pvt Ltd.</b>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    $msgsuccess = 'Mail Send Successfully';
} else{
    $msgerror = 'Main not send';
}
}
?>
<style>
.form-group{
margin-bottom:0px;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">

<?php
if ($msgerror) {
    ?>
                <div class="alert alert-danger"><?php echo $msgerror; ?></div>
            <?php } else if ($msgsuccess) { ?>
                <div class="alert alert-success"><?php echo $msgsuccess; ?></div>
            <?php } ?>

<div class="col-sm-12">
<form method="post" action="sendmail.php" enctype="multipart/form-data" >

<!-- <div class="col-sm-6" >&nbsp;</div> -->

<div class="col-sm-12">
<div class="form-horizontal">
    <div class="form-group">
    <label class="control-label col-sm-3" style="text-align: left;" for="pwd">Email</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="lead_email" id="" value="" required>
    </div>
  </div>
</div>
</div>



<div class="col-sm-2" style="margin-top:20px;padding-bottom: 50px;"><center><button type="submit" name="btnsave" id="btnsave"  class="btn btn-info" ><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;SEND ENQUIRY</button></center></div>


</div>


  



 </form>
<!-- <form method="post" action="create_lead_web.php" enctype="multipart/form-data" >
 <input type="text" class="form-control" name="lead_email" id="" value="" required>
<div class="col-sm-2" style="margin-top:20px;padding-bottom: 50px;"><button type="submit" name="btnemail" id="btnemail"  class="btn btn-info"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;SEND EMAIL</button></div>
</form>-->
  </div>



 <script>
function myUpdate() {
    alert("Thanks for the enquiry. Our team will contact you as sson as possible");
}
</script>

</body>
</html>
