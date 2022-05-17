<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="css/style.css" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/jasmine.css" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
</head>
<body>
<div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
    <!--NAVBAR-->
    <!--===================================================-->
    <?php include_once 'commons/header.php';?>
    <!--===================================================-->
    <!--END NAVBAR-->
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <section id="content-container">

            <header class="pageheader">
                <h3><i class="fa fa-home"></i> Dashboard </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Dashboard</li>
                    </ol>
                </div>
            </header>
            <!--Page content-->
            <!--===================================================-->
            <section id="page-content">
                <!-- Flot Charts -->
                <!--===================================================-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Visiteurs</h3>
                            </div>
                            <div class="panel-body">
                                <!--Flot Area Chart placeholder-->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div id="demo-realtime" style="height:400px"></div>
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            </div>
                        </div>
                    </div>
                </div>

                <!--===================================================-->
                <!-- End Flot Charts -->
            </section>
            <!--===================================================-->
            <!--End page content-->
        </section>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
        <?php include_once 'commons/footer.php';?>
        <!--===================================================-->
        <button id="scroll-top" class="btn">
            <i class="fa fa-chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>
    <!--Fast Click [ OPTIONAL ]-->
    <script src="plugins/fast-click/fastclick.min.js"></script>
    <!--Jasmine Admin [ RECOMMENDED ]-->
    <script src="js/scripts.js"></script>
    <!--Switchery [ OPTIONAL ]-->
    <script src="plugins/switchery/switchery.min.js"></script>
    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <!--Flot Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.min.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>
    <!--Flot Pie Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.pie.min.js"></script>
    <!--Flot Order Bars Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.selection.js"></script>
    <script src="plugins/flot-charts/jquery.flot.orderBars.js"></script>
    <script src="plugins/flot-charts/jquery.flot.spline.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/moment-range/moment-range.js"></script>
    <script src="plugins/flot-charts/jquery.flot.tooltip.min.js"></script>
    <script src="plugins/flot-charts/jquery.flot.stack.js"></script>
    <!--Fullscreen jQuery [ OPTIONAL ]-->
    <script src="plugins/screenfull/screenfull.js"></script>
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/jasmine.js"></script>
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/charts-flot.js"></script>
</body>
</html>