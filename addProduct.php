<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ajouter produit </title>
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
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
        <!--Jquery Tag It [ OPTIONAL ]-->
        <link href="plugins/tag-it/jquery.tagit.css" rel="stylesheet">
        <!--Ion.RangeSlider [ OPTIONAL ]-->
        <link href="plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet">
        <link href="plugins/ion-rangeslider/ion.rangeSlider.skinNice.css" rel="stylesheet">
        <!--Chosen [ OPTIONAL ]-->
        <link href="plugins/chosen/chosen.min.css" rel="stylesheet">
        <!--noUiSlider [ OPTIONAL ]-->
        <link href="plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
        <link href="plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <!--Dropzone [ OPTIONAL ]-->
        <link href="plugins/dropzone/dropzone.css" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="plugins/summernote/summernote.min.css" rel="stylesheet">
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
                        <h3><i class="fa fa-home"></i> Ajouter produit </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">Menu:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Acceuil </a> </li>
                                <li class="active"> Ajouter produit </li>
                            </ol>
                        </div>
                    </header>
                    <!--Page content-->
                    <!--===================================================-->
                    <section id="page-content">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Informations Produit</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <?=isset($_SESSION['err'])?$_SESSION['err']:'';?>
                                    <?php
                                    include_once 'implements/FArticle.php';
                                    include_once 'implements/FSousCategorie.php';
                                    $user="";
                                    if(isset($_GET['id']) && !empty($_GET['id']))
                                    {
                                        $art=FArticle::selectOne($_GET['id']);
                                    }
                                    if(isset($_SESSION['err'])){
                                        unset($_SESSION['err']);
                                    }
                                    ?>
                                    <form method="post" action="controllers/addProduct.php" class="panel-body form-horizontal">
                                        <!--Static-->

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Designation</label>
                                            <div class="col-md-9">
                                                <input value="<?=!empty($art['designation'])?$art['designation']:''?>" name="designation" type="text" id="demo-text-input" class="form-control" placeholder="Designation produit">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Sous Categorie</label>
                                            <div class="col-md-9">

                                                <select name="sousCategorie" type="text" id="demo-text-input" class="form-control">
                                                    <?php foreach (FSousCategorie::selectAll() as $item):?>
                                                        <option value="<?=$item['designation'];?>"><?=$item['designation'];?></option>
                                                    <?php endforeach;?>
                                                </select>

                                            </div>
                                        </div>
                                        <!--Email Input-->
                                        ><div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-email-input">Code</label>
                                            <div class="col-md-9">
                                                <input value="<?=!empty($art['code'])?$art['code']:''?>" name="code" type="text" id="demo-email-input" class="form-control" placeholder="Code produit">

                                            </div>
                                        </div>
                                        <!--Password-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-password-input">Prix</label>
                                            <div class="col-md-9">
                                                <input value="<?=!empty($art['prix'])?$art['prix']:''?>" name="prix" type="text" id="demo-password-input" class="form-control" placeholder="Prix produit">

                                            </div>
                                        </div>
                                        <!--Readonly Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-readonly-input">Taux TVA</label>
                                            <div class="col-md-9">
                                                <input value="<?=!empty($art['tauxTVA'])?$art['tauxTVA']:''?>" name="tauxTVA" type="text" id="demo-readonly-input" class="form-control" placeholder="Taux TVA" >
                                            </div>
                                        </div>

                                        <!--Readonly Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-readonly-input">Prix TTC</label>
                                            <div class="col-md-9">
                                                <input value="<?=!empty($art['prixTTC'])?$art['prixTTC']:''?>" name="prixTTC" type="text" id="demo-readonly-input" class="form-control" placeholder="Prix TTC" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-readonly-input">Quantité Stock</label>
                                            <div class="col-md-9">
                                                <input value="<?=!empty($art['qteStock'])?$art['qteStock']:''?>" name="qteStock" type="text" id="demo-readonly-input" class="form-control" placeholder="Quantité Stock" >
                                            </div>
                                        </div>
                                        <input value="<?=!empty($art['id'])?$art['id']:''?>" type="hidden" name="up" id="demo-password-input" class="form-control" placeholder="Mot de passe">


                                      <center><button type="submit" class="btn btn-primary">Enregistrer</button> </center>
                                    </form>
                                    <!--===================================================-->
                                    <!-- END BASIC FORM ELEMENTS -->
                                </div>
                            </div>

                        </div>
                    </section>
                    <!--===================================================-->
                    <!--End page content-->
                </section>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
              <?php include_once 'commons/footer.php';?>
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--jQuery UI [ REQUIRED ]-->
        <script src="js/jquery-ui.min.js"></script>
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
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="plugins/tag-it/tag-it.min.js"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src="plugins/chosen/chosen.jquery.min.js"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src="plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src="plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src="plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="plugins/dropzone/dropzone.min.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/jquery.maskedinput.min.js"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/jasmine.js"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src="js/demo/form-component.js"></script>
    </body>
</html>