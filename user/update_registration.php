<?php
//This page is used by admin to view the login details of created agents.
include '../constant.php';
$id=$_POST['id'];

 $img="img/".$id."/profile"."/".$id.".png";
 $img_thumb="img/".$id."/profile"."/".$id."_thumb".".png";

$url = $URL ."registration/read_profile_by_id.php";

$data=array("id"=>$id);
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);

function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
    //  print_r($response);
      return  json_decode($response);
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
    <a href="#"><b>REGISTRATION</b></a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      
      
      <h2 class="login-box-msg"><b><u>Update Details</u></b></h2>
      <hr>
      <div class="container-fluid">

<div class="row">
  
        <div class="col-sm-6">
  

      <img class="profile-user-img"
                       src="<?php echo  $img ?>"
                       alt="User image">
        </div> <div class="col-sm-6">
                       <img class="profile-user-img"
                       src="<?php echo  $img_thumb ?>"
                       alt="User thumb image">
           </div></div></div>
              <!-- form start -->
             <hr>
             <form action="action/update_registration_post.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                <?php 
								     
                     foreach($results as $key => $value){
                     foreach($value as $key1 => $value1)
                      {
                    ?>

      <div class="container-fluid">

  <div class="row">
    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Exam </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
              <input type="text" class="form-control" placeholder="Exam Name" name="exam_name"   value="<?php echo $value1->exam_name ?>" readonly>         

            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Full Name </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
              <input type="text" class="form-control" value="<?php echo $value1->full_name ?>"  placeholder="Full Name " name="full_name" autocomplete="off" required>         
          
          </div>
          </div>
            </div>
            </div>
 
  <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Date of Birth </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
            <input type="text" class="form-control" value="<?php echo date("d-m-Y", strtotime($value1->dob)) ?>"  name="dob"  placeholder="Date Of Birth"  autocomplete="off" required>         

            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Gender </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            <input type="text" class="form-control"  value="<?php echo $value1->gender ?>" name="gender"  placeholder="Gender" autocomplete="off" required>         
          </div>
          </div>
            </div>
            </div>

            <div class="row">

    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Marital Status</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>

              <input type="text" class="form-control"  placeholder="Marital Status" name="marital_status"   value="<?php echo $value1->marital_status ?>"  autocomplete="off" required>         

                      </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Spouse Name </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
             <input type="text" class="form-control"  placeholder="Spaouse Name" name="spouse_name"  value="<?php echo $value1->spouse_name ?>" autocomplete="off">         
 </div>
          </div>
            </div>
            </div>

            <div class="row">

    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Father Name </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Father Name" name="father_name"   value="<?php echo $value1->father_name ?>" autocomplete="off" required>         
                    </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Mother Name </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Mother Name" name="mother_name"   value="<?php echo $value1->mother_name ?>" autocomplete="off" required>         
                    
          </div>
          </div>
            </div>
            </div>

            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Email</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>

               <input type="text" class="form-control"  placeholder="Email" name="email"   value="<?php echo $value1->email ?>" autocomplete="off" required>         
        
         
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Mobile</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Mobile" name="mobile"   value="<?php echo $value1->mobile ?>" autocomplete="off" required>         

         
            </div>
          </div>
            </div>
            </div>



            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Correspondance Address </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Correspondance Address" name="cor_address"   value="<?php echo $value1->cor_address ?>" autocomplete="off" >         
              
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Address 1</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Address 1" name="address1"   value="<?php echo $value1->address1 ?>" autocomplete="off" required>         
         
            </div>
          </div>
            </div>
            </div>

            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Address 2</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Address 2" name="address2"   value="<?php echo $value1->address2 ?>" autocomplete="off" required>         
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Address 3 </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Address 3" name="address3"   value="<?php echo $value1->address3 ?>" autocomplete="off">         
       
            </div>
          </div>
            </div>
            </div>

            <div class="row">
  <!-- <div class="col-sm-12"> -->
    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">District </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-pin"></span>
              </div>
               <input type="text" class="form-control"  placeholder="District" name="district"   value="<?php echo $value1->district ?>" autocomplete="off" required>                  
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Pincode</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Pincode"  name="pincode"  value="<?php echo $value1->pincode ?>" autocomplete="off" required>                  

             
            </div>
          </div>
            </div>
            </div>


            
            <div class="row">
  <!-- <div class="col-sm-12"> -->
    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">State </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
              
               <input type="text" class="form-control"  placeholder="State" name="state"   value="<?php echo $value1->state ?>" autocomplete="off" required>                  
         
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Category</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Category" name="category"   value="<?php echo $value1->category ?>" autocomplete="off" required>                  
          
            </div>
          </div>
            </div>
            </div>
            
            <div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Religion </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Religion" name="religion"   value="<?php echo $value1->religion ?>" autocomplete="off" required>                  
                      
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Nationality</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-flag"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Nationality" name="nationality"   value="<?php echo $value1->nationality ?>" autocomplete="off" required>                  
            
          
            </div>
          </div>
            </div>
            </div>

            <div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Alternate Mobile </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
             <input type="text" class="form-control"  placeholder=" Alternate Mobile"   name="alternate_mobile" value="<?php echo $value1->alternate_mobile ?>" autocomplete="off" required>                  
            
            </div>
          </div>
            </div>

            </div>



<h2 class="login-box-msg"><b><u>Qualification & Other Details</u></b></h2>
      <hr>
      <div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Highest Qualification </label>
      <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-boxes"></span>
            </div>
         <input type="text" class="form-control"  placeholder="Highest Qualification" name="h_qualification"   value="<?php echo $value1->h_qualification ?>" autocomplete="off" required>                  
         
      </div></div></div>


       <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Subject/Stream/Degree Name </label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-graduation-cap"></span>
    </div>
  <input type="text" class="form-control"  placeholder="Subject/Stream/Degree Name" name="subject"   value="<?php echo $value1->subject ?>" autocomplete="off" required>                  

</div>
          </div></div></div>

          <div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Passing Date</label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-calendar"></span>
    </div>
    <input type="text" class="form-control"  placeholder="Passing Date" name="passing_date"   value="<?php echo date("d-m-Y", strtotime($value1->passing_date)) ?>" autocomplete="off" required>                  
  
          </div>
        </div>
      </div>

        <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Highest Qualification </label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-percent"></span>
    </div>
    <input type="text" class="form-control"  placeholder="Highest Qualification "  name="h_percentage"  value="<?php echo $value1->h_percentage ?>" autocomplete="off" required>
    </div>
          </div>
        </div>
</div> 

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Grade</label>
<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-graduation-cap"></span>
            </div>
          
            <input type="text" class="form-control"  placeholder="Grade " name="grade"  value="<?php echo $value1->grade ?>" autocomplete="off" required>                  

</div></div></div>
<div class="col-sm-6">
          <div class="form-group">
  <label for="input">Language</label>

        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-language"></span>
            </div>
          
            <input type="text" class="form-control"  placeholder="Language "  name="languages"  value="<?php echo $value1->languages ?>" autocomplete="off" required>                  

        </div>
          </div>
</div>
</div>

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are You Able To Read?</label>
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-book"></span>
            </div>
         
            <input type="text" class="form-control"  placeholder=" Are You Able To Read?"  name="is_read"  value="<?php echo $value1->is_read ?>" autocomplete="off" required>                  

        </div></div></div>

         <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are You Able To Write?</label>
         <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
            <input type="text" class="form-control"  placeholder="Are You Able To Write? " name ="is_write"   value="<?php echo $value1->is_write ?>" autocomplete="off" required>                  

        </div>
          </div></div></div>
      
        <div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are You Able To Speak?</label>
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-microphone"></span>
            </div>
            <input type="text" class="form-control"  placeholder=" Are You Able To Speak?" name="is_speak"   value="<?php echo $value1->is_speak ?>" autocomplete="off" required>                  

        </div></div></div>
        <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Disability Category?</label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-wheelchair"></span>
    </div>
  <input type="text" class="form-control"  placeholder=" Disability Category?" name="disability_cat"   value="<?php echo $value1->disability_cat ?>" autocomplete="off" >                  

</div></div></div></div>

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Disability Type (If Any)</label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-wheelchair"></span>
    </div>
  
  <input type="text" class="form-control"  placeholder="Disability Type (If Any)" name="disability_type"   value="<?php echo $value1->disability_type ?>" autocomplete="off" >                  
  
  </div></div></div>
  <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are you Ex-Serviceman?</label>
<div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-spinner"></span>
    </div>
          <input type="text" class="form-control"  placeholder="Are you Ex-Serviceman? "  name="ex_serviceman"  value="<?php echo $value1->ex_serviceman ?>" autocomplete="off" >                  

</div></div></div></div>

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are you Serving Defence Personnel?</label>

<div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
     <input type="text" class="form-control"  placeholder=" Are you Serving Defence Personnel?"  name="serving_defence_per"  value="<?php echo $value1->serving_defence_per ?>" autocomplete="off" >                  

</div></div></div>
<div class="col-sm-6">
          <div class="form-group">
  <label for="input">Service Period</label>

  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-clock"></span>
    </div>
 
    <input type="text" class="form-control"  placeholder="Service Period " name="service_period"   value="<?php echo $value1->service_period ?>" autocomplete="off" >                  

  </div></div></div>
</div>


<div class="row">    
          <div class="col-sm-4">

          
          </div>
 
          <div class="col-sm-4">
          
            <input type="hidden" name="id" value="<?php echo $value1->id ?>" >
            
            <input type="hidden" name="registration_no" value="<?php echo $value1->registration_no ?>" >

            <button type="submit" class="btn btn-success btn-block">Update</button>
        
          </div>
          <!-- /.col -->
        </div>
                </div>
               
      </div>

      <?php 
                
              }
              }?>
             </form>

             <!-- <div class="col-sm-4">
 <form action="registration_view.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $value1->id ?>" >
            
            <input type="hidden" name="registration_no" value="<?php echo $value1->registration_no ?>" >

            <button type="submit" class="btn btn-warning btn-block">GO BACK</button>
        
 </form> 
          </div> -->

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../common/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../common/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../common/dist/js/adminlte.min.js"></script>
</body>
</html>