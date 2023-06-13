<?php
session_start();

include '../constant.php';

$id=$_SESSION['user_id'];
$full_name=$_SESSION['full_name'];
// $full_name = "mrityunjay";
// $id='69';
$registration_no=$_SESSION['registration_no'];
// $registration_no='4038938846';
$exam_name=$_SESSION['exam_name'];
// $exam_name="UPTET";
$transaction_id=$_SESSION['transaction_id'];
// $transaction_id = "pay_Kpl1kJznmjhMeb";
$amount=$_SESSION['amount'];
// $amount='1';

$url = $URL . "payment/confirm_payment.php";

$data = array( "user_id"=>$id,"amount"=>$amount,"transaction_id"=>$transaction_id);

    //print_r($data);
     $postdata = json_encode($data);

$result_payment=url_encode_Decode($url,$postdata);
//print_r($result_payment);

$date = date('d-m-Y');
 
function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
return $result = json_decode($response);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHAILJA SAMEER EDUCATION AND GREEN REVOLUTION PRIVATE LIMITED</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../common/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../common/build/scss/pages/_login_and_register.scss">
  <link rel="stylesheet" href="../common/build/scss/pages/_profile.scss">

</head>

<body class="hold-transition register-page">
   

<div class="register-box">
  <div class="register-logo">
    <!-- <a href="#"><b>PAYMENT</b></a> -->
  </div>
  <div class="card card-success card-outline">
    <div class="card-body register-card-body">
      <!-- <p class="login-box-msg"><a href="index.php"><b class="login-box-msg">Alreadr Register? Please Login.</b></a></p> -->
      
      <h2 class="login-box-msg"><b><u>Payment Success Details</u></b></h2>
      <button class="btn btn-primary btn-sm" id="printpagebutton" onclick="printpage()"><i class="fa fa-print mr-2"></i>Print</button>
      <div class="btn-group" id="options">
      <a href="confirmation.php"><button class="btn btn-success btn-sm" id="finalbutton"><i class="fa fa-arrow-right mr-2"></i>Get Final Print</button></a>
     </div>
      <hr>
  
    
                <div class="card-body">

            
      <div class="container-fluid">
   
      <p> Dear <b><?php echo $full_name  ?></b>, Thank you for the payment for examination : <b><?php echo $exam_name ?></b>. Your Registration Number is :<b> <?php echo $registration_no; ?></b></p>
<p>Your payment is successfull Amount for examination :<b> <?php echo $exam_name ?></b> is<b> &#8377;<?php echo $result_payment->records[0]->amount; ?></b>
and your Transaction Id </b> is<b> &#8377;<?php echo $result_payment->records[0]->transaction_id; ?></b> </p>

<p>Date:<strong class="ml-2"><?php echo $date; ?></strong></p>





                </div>
               
      </div>
     

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script>
   function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        finalbutton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
        finalbutton.style.visibility = 'visible';
    }
</script>

<!-- jQuery -->
<script src="../common/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../common/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../common/dist/js/adminlte.min.js"></script>
</body>
</html>