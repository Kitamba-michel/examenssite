<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Proformat</title>

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
    <link href="css/demo.css" rel="stylesheet">

    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>

</head>

<body>
    <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">

        <?php include_once 'commons/header.php';?>

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">



                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Facture proformat </h3>
                    <div class="breadcrumb-wrapper"> <span class="label">Menu:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Acceuil </a> </li>
                            <li class="active"> Facture proformat</li>
                        </ol>
                    </div>
                </div>


                <?php

                include_once 'implements/FCmdClientArticle.php';
                include_once 'implements/FCmdClient.php';


                ?>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                    <div class="container bootstrap snippets bootdeys">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default invoice" id="invoice">
                                    <div class="panel-body">
                                        <div class="invoice-ribbon"><div class="ribbon-inner"><?=FCmdClient::selectOne($_GET['code'])['etat']==null?'En cours':'Payer'?></div></div>
                                        <div class="row">

                                            <div class="col-sm-6 top-left">
                                                <i class="fa fa-rocket"></i>
                                            </div>

                                            <div class="col-sm-6 top-right">
                                                <h3 class="marginright">FACTURE PROFORMAT-<?=$_GET['code']?></h3>
                                                <span class="marginright"><?=date('Y-m-d')?></span>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <?php
                                                include_once 'implements/FClient.php';
                                                $client=FClient::selectOne($_GET['id']);

                                            ?>
                                            <div class="col-xs-4 from">
                                                <p class="lead marginbottom">De : STOCK MICK NEW TECHNOLOGIE</p>
                                                <p>Lubumbashi</p>
                                                <p>SUniversité libre</p>

                                                <p>Phone: +243-974047081</p>
                                                <p>Email: contact@STOCK MICK NEW TECHNOLOGIE.com</p>
                                            </div>

                                            <div class="col-xs-4 to">

                                                <p class="lead marginbottom">A : <?=$client['nom']?></p>
                                                <p><?=$client['adresse']?></p>


                                            </div>

                                            <div class="col-xs-4 text-right payment-details">
                                                <p class="lead marginbottom payment-info">Paiment details</p>
                                                <p>Date: <?=date('Y-m-d')?></p>
                                                <p>VAT: DK888-777 </p>
                                                <p>Total Amount: $1019</p>
                                                <p>Account Name: Flatter</p>
                                            </div>

                                        </div>

                                        <div class="row table-row">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="text-center" style="width:5%">#</th>
                                                    <th style="width:50%">Item</th>
                                                    <th class="text-right" style="width:15%">Quantit</th>
                                                    <th class="text-right" style="width:15%">Prix Uni.</th>
                                                    <th class="text-right" style="width:15%">Prix Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                              <?php $tot=0; foreach (FCmdClientArticle::selectAllByIdAndCode($_GET['id'],$_GET['code']) as $k=> $item):?>
                                                    <tr class="last-row">
                                                        <td class="text-center"><?=$k+1;?></td>
                                                        <td><?=$item['designation'];?></td>
                                                        <td class="text-right"><?=$item['quantite'];?></td>
                                                        <td class="text-right"><?=$item['prix'];?></td>
                                                        <td class="text-right"><?=$item['quantite']*$item['prix'];?></td>
                                                    </tr>
                                                <?php $tot+=($item['quantite']*$item['prix']); endforeach;?>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6 margintop">
                                                <p class="lead marginbottom">Merci!</p>

                                                <button onClick="printdiv('content-container');" class="btn btn-success" id="invoice-print"><i class="fa fa-print"></i>Imprimer</button>
                                                <a href="controllers/invoice.php?id=<?=$_GET['code'];?>" class="btn btn-primary" id="invoice-user"><i class="fa fa-edit"></i>Traiter</a>

                                            </div>
                                            <div class="col-xs-6 text-right pull-right invoice-total">
                                                <p>Subtotal : <?=$tot;?></p>
                                                <p>Discount (16%) :<?=($tot*16)/100;?> </p>

                                                <p>Total : <?=$tot+($tot*16)/100;?> </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

            <?php include_once 'commons/footer.php';?>
        <!--===================================================-->
        <!-- END FOOTER -->

        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->

    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    <!--JAVASCRIPT-->
    <!--=================================================-->
        <script language="javascript">
            function printdiv(elem)
            {
                var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                mywindow.document.write('<html><head>');
                mywindow.document.write("<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\"><link href=\"../css/core.css\" rel=\"stylesheet\"><link href=\"../css/components.css\" rel=\"stylesheet\"><link href=\"../css/icons.css\" rel=\"stylesheet\">")
                mywindow.document.write('</head><body >');
                mywindow.document.write(document.getElementById('content-container').innerHTML);
                mywindow.document.write('</body></html>');

                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10*/


                setTimeout(function () {
                    mywindow.print();
                    mywindow.close();
                }, 1000)
                return true;
            }
        </script>
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

    <!--Fullscreen jQuery [ OPTIONAL ]-->
    <script src="plugins/screenfull/screenfull.js"></script>

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/jasmine.js"></script>


</body>
</html>