<?php include "include/header.php"; ?>
<?php
$url = $URL."notification/read_notification.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
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
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Notification</li>
                    </ul>
                    <h2>Our Notification</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Faq page Start-->
        <section class="faq-page">
            <div class="faq-page-shape-1 float-bob-x"
                style="background-image: url(assets/images/shapes/faq-page-shape-1.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-6">
                        <div class="faq-page__single">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                 <?php 
                       
                                     $counter=0;  
                                      foreach($result as $key => $value){
                                      foreach($value as $key1 => $value1)
                                  {
                             $pdf_path = "../admin/image/".$value1->id."/pdf/".$value1->id.".pdf";
                              ?>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><?php echo $value1->n_title; ?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $value1->n_description; ?></p>
                                        </div><!-- /.inner -->
                                        <a href="<?php echo $pdf_path; ?>" target="_blank">
                                        <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View PDF</button></a>
                                    </div>
                                </div>
                             <?php } } ?>
                             <!--    <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Home Improvement Works are Expensive?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                                ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                                adipisi cing elit.</p>
                                        </div><!-- /.inner -->
                                        <!--<button class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View PDF</button>
                                    </div>
                                </div> -->
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq page End-->

<?php include "include/footer.php"; ?>