<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>SYNTRA | Responsive Web App Kit</title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="<?php echo URL_BASE ?>assets/images/favicon.ico">

        <link href="<?php echo URL_BASE ?>assets/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="<?php echo URL_BASE ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL_BASE ?>assets/css/slidebars.min.css" rel="stylesheet">
        <link href="<?php echo URL_BASE ?>assets/css/icons.css" rel="stylesheet">
        <link href="<?php echo URL_BASE ?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_BASE ?>assets/css/style.css" rel="stylesheet">
    </head>

    <body class="sticky-header">
        <section>
            <?php include "menu.php" ?>      
            <div class="body-content">
                <?php include "topo.php" ?>
                <div class="container-fluid">
                <?php include "home.php" ?>
                <?php $this->load($view, $viewData); ?>
                </div>
                <?php include "rodape.php" ?>                
            </div>   
        </section>
 
        <script src="<?php echo URL_BASE ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/popper.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/jquery-migrate.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/slidebars.min.js"></script>

        <!--plugins js-->
        <script src="<?php echo URL_BASE ?>assets/plugins/counter/jquery.counterup.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/pages/jquery.sparkline.init.js"></script>

        <script src="<?php echo URL_BASE ?>assets/plugins/chart-js/Chart.bundle.js"></script>
        <script src="<?php echo URL_BASE ?>assets/plugins/morris-chart/raphael-min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/plugins/morris-chart/morris.js"></script>
        <script src="<?php echo URL_BASE ?>assets/pages/dashboard-init.js"></script>


        <!--app js-->
        <script src="<?php echo URL_BASE ?>assets/js/jquery.app.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>
    </body>
</html>
