<?php 

$base_url = 'http://localhost/cogniflowweb/';

include_once ("php/partials/global/_urlHandler.php");

// $url = isset($_GET['url']) ? trim($_GET['url']) : '/';

$routes = [
    '/' => 'php/views/_home.php',
    '' => 'php/views/_home.php',
    'about' => 'php/views/_about.php',
    'services' => 'php/views/_services.php',
    'contact' => 'php/views/_contact.php',
    'services/powersystem' => 'php/views/_serviceDetails.php',
    'services/iiot' => 'php/views/_serviceDetails.php',
    'services/automation' => 'php/views/_serviceDetails.php',
    'services/aveva' => 'php/views/_serviceDetails.php',
    'services/sensors' => 'php/views/_serviceDetails.php',
    'services/saas' => 'php/views/_serviceDetails.php',
];
?>

<!doctype html>
<html  lang="en">

<?php
include_once 'php/partials/global/_head.php';
?>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->



    <?php 
        if ($url == '' || $url == '/') {
          include_once 'php/partials/global/_header2.php';
        }else{
          include_once 'php/partials/global/_header.php';
        }
        

        // Check if the requested URL exists in the routes
        if (array_key_exists($url, $routes)) {
            include_once $routes[$url];
        } else {
            // Handle 404 error
            http_response_code(404);
            // echo '404 Not Found'. $url;
            include_once 'php/views/_error.php';
        }

        include_once 'php/partials/global/_footer.php';
    ?>




  <div id=jSplash>
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>


    <!-- JS here -->


  <script src="<?= $asset_base ?>assets/js/vendor/jquery.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/jpreLoader.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/jquery.waypoints.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/easing.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/fancySelect.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/custom.js"></script>
  <script src="<?= $asset_base ?>assets/switcher/demo.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/jquery.animateNumber.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/custom-counterup.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/jquery.mobile-menu.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/sticky.min.js"></script>
  <script type="text/javascript" src="<?= $asset_base ?>assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="<?= $asset_base ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/revoslider-custom.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/custom-isotope.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/owl.carousel.js"></script>
  <script src="<?= $asset_base ?>assets/js/plugins/custom-owl.js"></script>
  <?php if ($url == 'contact') {
    echo '<script src="<?= $asset_base ?>assets/js/plugins/contact.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js"></script>';
  }
  ?>

</body>

</html>