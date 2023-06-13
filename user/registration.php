<?php
include '../constant.php';

$url = $URL ."exam/read_exam.php";

$data=array();
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);

//print_r($results);

function giplCurl($api,$postdata){
      $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
      //print_r($response);
      return $result = json_decode($response);
  }
?>
<?php

$exam_name = $_POST['exam_name'];

?>
<script>
function getFileData(object){
  //alert("Hello");
var file = object.files[0];
var name = file.name;//you can set the name to the paragraph id 
document.getElementById('selectedFile').innerHTML=name;//set name using core javascript
// alert(name);
}
function getFileThumbData(object){
  //alert("Hello");
var file = object.files[0];
var name = file.name;//you can set the name to the paragraph id 
document.getElementById('selectedFileThumb').innerHTML=name;//set name using core javascript
// alert(name);
}
</script>


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
  <link rel="stylesheet" href="../common/build/scss/pages/_login_and_register.scss"
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo mb-3">
    <a href="#"><b>REGISTRATION</b></a>
  </div>
  <div class="card card-success card-outline">
    <div class="card-body register-card-body">
      
      
      <h2 class="login-box-msg"><u>Personal Details</u></h2>
      <!-- <p class="login-box-msg"><a href="index.php"><b class="login-box-msg">Alreadr Register? Please Login.</b></a></p> -->
      <hr>
     
      <form action="action/registration_post.php" method="post" enctype="multipart/form-data">
      <div class="container-fluid">

  <div class="row">
    
          <div class="col-sm-6">
            <div class="form-group">
              <label for="input">Apply For</label>
               <div class="input-group-append">
                 <div class="input-group-text">
                 <span class="fas fa-boxes"></span>
                </div>
                <input class="form-control" type="text" name="exam_name" value="<?php echo $exam_name; ?>" readonly>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="input">Full Name </label>
             <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
              <input type="text" class="form-control" placeholder="Full Name" name="full_name" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Full Name">         
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
            <input class="form-control" type="date-time" placeholder="dd-mm-yyyy" name="dob" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Date of Birth">         

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
              <select class="form-control" name="gender" >
         <option class="form-control" value="0">Please Select Gender</option>
             <option class="form-control" value="Male">Male</option>
             <option class="form-control" value="Female">Female</option>
             <option class="form-control" value="Other">Other</option>
         </select>

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

              <select class="form-control" name="marital_status" >
         <option class="form-control" value="0">Please Select Marital Status</option>
         <option class="form-control" value="Married">Married</option>
             <option class="form-control" value="Unmarried">Unmarried</option>
                     </select>
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
            <input type="text" class="form-control" placeholder="Spouse Name" name="spouse_name" autocomplete="off"   data-toggle="tooltip" title="Please Enter Spouse Name">         

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
            <input type="text" class="form-control" placeholder="Father Name" name="father_name" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Father Name">         

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
              <input type="text" class="form-control" placeholder="Mother Name" name="mother_name" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Mother Name">         
         
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

              <input type="text" class="form-control" placeholder="Email" name="email" autocomplete="off"   data-toggle="tooltip" title="Please Enter Email">         
         
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
              <input type="text" class="form-control" placeholder="Mobile No." name="mobile" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Phone Number">         
         
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

              <input type="text" class="form-control" placeholder="Correspondance Address" name="cor_address" autocomplete="off"   data-toggle="tooltip" title="Please Enter Correspondance Address">         
         
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
              <input type="text" class="form-control" placeholder="Address 1" name="address1" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Address 1">         
         
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
              <input type="text" class="form-control" placeholder="Address 2" name="address2" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Address">         
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
              <input type="text" class="form-control" placeholder="Address 3" name="address3" autocomplete="off"  data-toggle="tooltip" title="Please Enter Address3">         
         
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
              <input type="text" class="form-control" placeholder="District" name="district" autocomplete="off" required  data-toggle="tooltip" title="Please Enter District Name">         
         
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
              <input type="text" class="form-control" placeholder="Pincode" name="pincode" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Pincode">
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
              <input type="text" class="form-control" placeholder="State" name="state" autocomplete="off" required  data-toggle="tooltip" title="Please Enter District Name">         
         
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
              <input type="text" class="form-control" placeholder="Category" name="category" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Category Name">         
          
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
              <input type="text" class="form-control" placeholder="Religion" name="religion" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Religion">         
         
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
              <input type="text" class="form-control" placeholder="Nationality" name="nationality" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Nationality">         
          
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
              <input type="text" class="form-control" placeholder="Alternate Mobile No." name="alternate_mobile" autocomplete="off" required  data-toggle="tooltip" title="Please Enter alternate mobile">         
         
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
         <select class="form-control" name="h_qualification" >
         <option class="form-control" value="0">Please select highest qualification</option>
         <option class="form-control" value="Under Graduation">Post Graduation</option>
             <option class="form-control" value="Under Graduation">Under Graduation</option>
             <option class="form-control" value="Senior Secondar">Senior Secondary</option>
             <option class="form-control" value="Higher Secondary">Higher Secondary</option>
             <option class="form-control" value="Higher Secondary">class 5th</option>
             <option class="form-control" value="Higher Secondary">class 8th</option>
         </select>
      </div></div></div>


       <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Subject/Stream/Degree Name </label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-graduation-cap"></span>
    </div>
  <input type="text" class="form-control" placeholder="Subject/Stream/Degree" name="subject" autocomplete="off" required>

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
  
  <input type="date" class="form-control" placeholder="Passing Date" name="passing_date" autocomplete="off" required>
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
  
  <input type="text" class="form-control" placeholder="Marks Obtained(%)" name="h_percentage" autocomplete="off" required>
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
          
         <select class="form-control" name="grade" >
         <option class="form-control" value="0">Please Select Grade</option>
         <option class="form-control" value="First">First</option>
             <option class="form-control" value="Second">Second</option>
             <option class="form-control" value="Third">Third</option>
         </select>
</div></div></div>
<div class="col-sm-6">
          <div class="form-group">
  <label for="input">Language</label>

        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-language"></span>
            </div>
          
         <select class="form-control" name="language">
         <option class="form-control" value="Hindi">Hindi</option>
             <option class="form-control" value="English">English</option>
             <option class="form-control" value="Other">Other</option>
         </select>
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
         
        <select class="form-control" name="read" >
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        </div></div></div>

         <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are You Able To Write?</label>
         <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
                   <select class="form-control" name="write">
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
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
         <select class="form-control" name="speak">
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        </div></div></div>
        <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Disability Category?</label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-wheelchair"></span>
    </div>
  <input type="text" class="form-control" placeholder="Disability Category" name="disability_cat" autocomplete="off">

</div></div></div></div>

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Disability Type (If Any)</label>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-wheelchair"></span>
    </div>
  <input type="text" class="form-control" placeholder="Disability Type (If Any)" name="disability_type" autocomplete="off">
  
  </div></div></div>
  <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are you Ex-Serviceman?</label>
<div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-spinner"></span>
    </div>
         <select class="form-control" name="ex_serviceman">
         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>
             
         </select>
</div></div></div></div>

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Are you Serving Defence Personnel?</label>

<div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
         <select class="form-control" name="serving_defence_per">
         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>  
         </select>
</div></div></div>
<div class="col-sm-6">
          <div class="form-group">
  <label for="input">Service Period (In month)</label>

  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-clock"></span>
    </div>
 
  <input type="number" class="form-control" placeholder="Service Period of Serving Defence Personnel" name="service_period" autocomplete="off">
  </div></div></div>
</div>
  

<div class="row">    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Upload Image</label>

                     <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  id="file" name="fileUpload" onchange='getFileData(this)' class="custom-file-input" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <label id="selectedFile"  style="background-color:skyblue;"></label>
                  </div></div>
           
                  <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Upload Thumb Image</label>
                     <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  id="fileThumb" name="fileUploadThumb" onchange='getFileThumbData(this)' class="custom-file-input" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <label id="selectedFileThumb"  style="background-color:skyblue;"></label>
                  </div>
                </div></div>
          <div class="col-4"  style="margin: 0px 281px 0px;">
            <button type="submit" class="btn btn-success btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </div>
      </form>

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
