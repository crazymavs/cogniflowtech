    <!-- main-area -->
    <main class="main-area fix">


     <!-- Section Header Title -->
        <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <div class="col-md-12">
                            <h2>
                            <?php
                                $serviceDetails = [
                                    'services/powersystem' => 'Power System Consultancy',
                                    'services/iiot' => 'Industrial IIoT Solutions',
                                    'services/automation' => 'Industrial Automation Systems',
                                    'services/aveva' => 'Siemens Automation Solutions',
                                    'services/sensors' => 'Sensors & Industrial Instruments',
                                    'services/saas' => 'Software as a Service (SaaS)',
                                ];

                                if (array_key_exists($url, $serviceDetails)) {
                                    echo $serviceDetails[$url];
                                }else {
                                    echo "Services";
                                }
                            ?>

                            </h2>
                        </div>
                    </div>
                </div><!-- End Row -->
            </div><!-- End container -->

        </section><!--  End Section -->

        <!-- Section BreadCrumb -->
        <div class="no-padding border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb breadcrumb-finance">
                            <li><a href="<?= $asset_base ?>"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="active">
                        <?php
                                $serviceDetails = [
                                    'services/powersystem' => 'Power System Consultancy',
                                    'services/iiot' => 'Industrial IIoT Solutions',
                                    'services/automation' => 'Industrial Automation Systems',
                                    'services/aveva' => 'Siemens Automation Solutions',
                                    'services/sensors' => 'Sensors & Industrial Instruments',
                                    'services/saas' => 'Software as a Service (SaaS)',
                                ];

                                if (array_key_exists($url, $serviceDetails)) {
                                    echo $serviceDetails[$url];
                                }else {
                                    echo "Services";
                                }
                            ?>
                            </li>
                        </ol>
                    </div><!--  End col -->
                </div> <!-- End Row -->
            </div><!-- End container -->
        </div><!--  End Section -->

        <div class="line"></div>

       
        <!-- services-details-area -->
        <section class="services__details-area section-py-130">
            <div class="container">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                        <div class="services__details-wrap">
                            <?php
                                $serviceDetails = [
                                    'services/powersystem' => 'php/partials/serviceDetails/_powerSystem.php',
                                    'services/iiot' => 'php/partials/serviceDetails/_iiot.php',
                                    'services/automation' => 'php/partials/serviceDetails/_automation.php',
                                    'services/aveva' => 'php/partials/serviceDetails/_aveva.php',
                                    'services/sensors' => 'php/partials/serviceDetails/_sensors.php',
                                    'services/saas' => 'php/partials/serviceDetails/_saas.php',
                                ];

                                if (array_key_exists($url, $serviceDetails)) {
                                    include_once $serviceDetails[$url];
                                }
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- services-details-area-end -->

  <!-- Section Text 3 Column-->
    <section class="bg-grey">
      <div class="container">
         <div class="some-row" >
          <div class="three-column-text ">
            <h2 class="title ">To know more....</h2>
          </div> <!-- End 3 column text -->
          <div class="">
              <a href="<?= $asset_base ?>contact">
                <button type="button" class="ot-btn large-btn btn-rounded btn-main-color btn-submit">Contact Us</button>
                </a>
            </div>
        </div><!-- End row -->
      </div><!-- End Container -->
    </section><!-- End Section -->
    </main>
    <!-- main-area-end -->