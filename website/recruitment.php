<?php 
include "include/header.php"; 
?>
<?php

  $url = $URL."exam/read_exam_list.php";
  $data = array();
  //print_r($data);
  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
  //curl_setopt($client, CURLOPT_POST, 5);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  //print_r($response);
  $result = json_decode($response);
  //print_r($result);
?>

    <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><span>/</span></li>
                        <li>Recruitment</li>
                    </ul>
                    <h2>Recruitment</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <h3 class="error-page__tagline">Recruitment</h3>
                            <p class="error-page__text"><b>SHAILJA SANEER EDUCATION AND GREEN REVOLUTIO (OPC) PVT.LTD.</b></p>
                            <p class="error-page__text" style="font-size:15px;">* RECRUITED 53900 VARIOUS POST IN EDUCATION, AGRICUTURE AND HOME INDUSTRY / SMALL SCALE INDUSTRY SECTOR.</p>
                          
                          <!--    <h3 class="error-page__tagline mt-5">If your paymet is faild</h3>
                             <div class="error-page__btn-box">
                                <a href="#" class="thm-btn error-page__btn" data-toggle="modal" data-target="#exampleModal" data-whatever="">Payment Now<i
                                        class="icon-right-arrow"></i> </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                      <div class="row mt-3">
                    <div class="col-xl-4">
                        <div class="error-page__inner bg-light p-2">
                             <!-- <h3 class="error-page__tagline mt-5">If your paymet is faild</h3> -->
                                   <span class="section-title__tagline">If Your Paymet Is Faild</span>
                             <div class="error-page__btn-box">
                                <a href="#" class="thm-btn error-page__btn" data-toggle="modal" data-target="#exampleModal" data-whatever="">Payment Now<i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="error-page__inner bg-light p-2">
                             <!-- <h3 class="error-page__tagline mt-5">Get final print after payment</h3> -->
                              <span class="section-title__tagline">Know Your Registration No.</span>
                             <div class="error-page__btn-box">
                                <a href="#" class="thm-btn error-page__btn" data-toggle="modal" data-target="#findRegModal" data-whatever="">Get Registration No.<i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="error-page__inner bg-light p-2">
                             <!-- <h3 class="error-page__tagline mt-5">Get final print after payment</h3> -->
                              <span class="section-title__tagline">Get Final Print After Payment</span>
                             <div class="error-page__btn-box">
                                <a href="#" class="thm-btn error-page__btn" data-toggle="modal" data-target="#printModal" data-whatever="">Get Final Print<i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->
        <!-- modal box start -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="../user/payment_verify.php" method="post">
         <div class="modal-header">
          <p class="h3 m-auto">Payment Verification</p>
        </div>
        <div class="modal-body">
    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Registration No.</label>
            <input type="number" class="form-control" name="registration_no" placeholder="Registration No." autocomplete="off" id="recipient-name" required>
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No.</label>
            <input type="number" class="form-control" name="mobile" placeholder="Mobile No." id="recipient-name" autocomplete="off" required>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-success">Verify</button>
      </div>
     </form>
    </div>
  </div>
</div>

        <!--  modal box end -->

        <!-- modal box start for know registration number -->

      <div class="modal fade" id="findRegModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="../user/find_reg_number.php" method="post">
         <div class="modal-header">
          <p class="h3 m-auto">Search Your Registration No.</p>
        </div>
        <div class="modal-body">
    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="full_name" placeholder="Enter Your Name" autocomplete="off" id="recipient-name" required>
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No.</label>
            <input type="number" class="form-control" name="mobile" placeholder="Mobile No." id="recipient-name" autocomplete="off" required>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-success">Search</button>
      </div>
     </form>
    </div>
  </div>
</div>

        <!--  modal box end for know registration number-->


                <!-- modal box start for get final print -->

      <div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="../user/print_verify_post.php" method="post">
         <div class="modal-header">
          <p class="h3 m-auto">Get Your Final Print</p>
        </div>
        <div class="modal-body">
    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Registration No.</label>
            <input type="number" class="form-control" name="registration_no" placeholder="Registration No." autocomplete="off" id="recipient-name" required>
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No.</label>
            <input type="number" class="form-control" name="mobile" placeholder="Mobile No." id="recipient-name" autocomplete="off" required>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
     </form>
    </div>
  </div>
</div>

        <!--  modal box end for get final print-->
        <!--Start Cart Page-->
        <section class="cart-page">
            <div class="container">
                <marquee scrollamount="5" behavior="alternate"><p class="text text-danger mb-2">Date is extended 25/02/2023 to 25/09/2023 for the notification 53900 various post in Education, Agriculture and small/Home industry sector.</p></marquee>
                <div class="table-responsive">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>S.N</th> 
                                <th>Application Name</th>
                                <th>Application Fee</th>
                                <th>Total Post</th>
                                <th>Eligibility</th>
                                <th>Application Start Date</th>
                                <th>Application End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                             <?php 

                                $counter=0;
                                foreach($result as $key => $value){
                                foreach($value as $key1 => $value1)
                               {
                              
                             ?> 

                            <tr>
                                <div class="product-box">
                                <td><h3><?php echo ++$counter; ?></h3></td>
                                </div>
                                <td>
                                    <div class="product-box">
                                        <h3><a href="#"><?php echo $value1->exam_name; ?></a></h3>
                                    </div>
                                </td>
                                <td><?php echo $value1->amount; ?>/-</td>
                                <td><?php echo $value1->total_post; ?></td>
                                <td><?php echo $value1->eligibility; ?></td>
                                <td>
                                    <?php 
                                      $date = date("d-m-Y",strtotime($value1->exam_date_start)); 
                                      echo $date=="01-01-1970" ? '0' : $date;
                                     ?>    
                                </td>
                                <td>
                                    <?php 
                                      $date = date("d-m-Y",strtotime($value1->exam_date_end)); 
                                      echo $date=="01-01-1970" ? '0' : $date;
                                     ?>     
                                 </td>
                                 <td>
                                   <div class="error-page__btn-box mt-0">
                                     <a href="../user/Instructions.php?examname=<?php echo $value1->exam_name; ?>" target="blank" class="thm-btn error-page__btn">Apply<i class="icon-right-arrow"></i> </a>
                                    </div>
                                 </td>
                            </tr>

                            <?php } } ?>
                           
                        </tbody>
                    </table>
                </div>

             <!--    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <form action="#" class="default-form cart-cupon__form">
                            <input type="text" placeholder="Enter Coupon Code" class="cart-cupon__input">
                            <button class="thm-btn" type="submit">
                                <span>Apply Coupon</span> <i class="icon-right-arrow"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <ul class="cart-total list-unstyled">
                            <li>
                                <span>Subtotal</span>
                                <span>$20.98 USD </span>
                            </li>
                            <li>
                                <span>Shipping Cost</span>
                                <span>$0.00 USD</span>
                            </li>
                            <li>
                                <span>Total</span>
                                <span class="cart-total-amount">$20.98 USD</span>
                            </li>
                        </ul>
                        <div class="cart-page__buttons">
                            <div class="cart-page__buttons-1">
                                <a href="#" class="thm-btn">Update <i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="cart-page__buttons-2">
                                <a href="checkout.html" class="thm-btn">Checkout <i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--End Cart Page-->
        <script>
        
        $('#exampleModal').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget) // Button that triggered the modal
         var recipient = button.data('whatever') // Extract info from data-* attributes
         // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
         // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
       modal.find('.modal-body input').val(recipient)
        })

        </script>
<?php
include "include/footer.php"; 
?>
