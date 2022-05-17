<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <?php if(isset($_SESSION['role']) && $_SESSION['role']=='admin'):?>
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="list-header">Navigation</li>
                        <!--Menu list item-->
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-home"></i>
                                <span class="menu-title">Utilisateur</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="addUser.php"><i class="fa fa-caret-right"></i>Ajouter</a></li>
                                <li><a href="list-users.php"><i class="fa fa-caret-right"></i>Liste</a></li>

                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="menu-title">Article</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="addProduct.php"><i class="fa fa-caret-right"></i>Ajouter</a></li>
                                <li><a href="list-products.php"><i class="fa fa-caret-right"></i>Liste</a></li>

                            </ul>
                        </li>


                        <li>
                            <a href="#">
                                <i class="fa fa-home"></i>
                                <span class="menu-title">Fourniseur</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="addFournisseur.php"><i class="fa fa-caret-right"></i>Ajouter</a></li>
                                <li><a href="list-fournisseur.php"><i class="fa fa-caret-right"></i>Liste</a></li>


                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        <!--Category name-->
                        <li class="list-header">Group</li>
                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span class="menu-title">
                                            <strong>Client</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="addClient.php"><i class="fa fa-caret-right"></i> Ajouter</a></li>
                                <li><a href="list-client.php"><i class="fa fa-caret-right"></i> Liste </a></li>

                            </ul>
                        </li>
                        <!--Menu list item-->

                        <li>
                            <a href="#">
                                <i class="fa fa-file"></i>
                                <span class="menu-title">Commande</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="preCommande.php"><i class="fa fa-caret-right"></i> Nouvelle commande  </a></li>
                                <li><a href="list-command.php"><i class="fa fa-caret-right"></i> Liste  </a></li>


                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Categorie & Sous</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="addCategory.php"><i class="fa fa-caret-right"></i> Ajouter Categorie </a></li>
                                <li><a href="addSousCategory.php"><i class="fa fa-caret-right"></i> Ajouter Sous </a></li>
                                <li><a href="list-category.php"><i class="fa fa-caret-right"></i> Liste Categorie</a></li>
                                <li><a href="list-souscategory.php"><i class="fa fa-caret-right"></i> Liste Sous</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Rapport</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="rapport-journalier.php"><i class="fa fa-caret-right"></i> Journalier </a></li>
                                <li><a href="rapport-mensuel.php"><i class="fa fa-caret-right"></i> Mensuel </a></li>
                                <li><a href="rapport-annuel.php"><i class="fa fa-caret-right"></i> Annuel</a></li>

                            </ul>
                        </li>



                    </ul>
                    <!--Widget-->
                    <?php else:?>
                        <ul id="mainnav-menu" class="list-group">
                            <!--Category name-->
                            <li class="list-header">Navigation</li>
                            <!--Menu list item-->

                            <!--Menu list item-->
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">Article</span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li><a href="addProduct.php"><i class="fa fa-caret-right"></i>Ajouter</a></li>
                                    <li><a href="list-products.php"><i class="fa fa-caret-right"></i>Liste</a></li>

                                </ul>
                            </li>



                            <li class="list-divider"></li>
                            <!--Category name-->
                            <li class="list-header">Group</li>
                            <!--Menu list item-->
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i>
                                    <span class="menu-title">
                                            <strong>Client</strong>
                                            </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li><a href="addClient.php"><i class="fa fa-caret-right"></i> Ajouter</a></li>
                                    <li><a href="list-client.php"><i class="fa fa-caret-right"></i> Liste </a></li>

                                </ul>
                            </li>
                            <!--Menu list item-->

                            <li>
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span class="menu-title">Commande</span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li><a href="preCommande.php"><i class="fa fa-caret-right"></i> Nouvelle commande  </a></li>
                                    <li><a href="list-command.php"><i class="fa fa-caret-right"></i> Liste  </a></li>


                                </ul>
                            </li>
                            <!--Menu list item-->




                        </ul>
                    <?php endif;?>
                    <!--================================-->

                    <!--================================-->
                    <!--End widget-->
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->
    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->

<!--ASIDE-->
<!--===================================================-->
<aside id="aside-container">
    <div id="aside">
        <div class="nano">
            <div class="nano-content">
                <!--Nav tabs-->
                <!--================================-->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#demo-asd-tab-1" data-toggle="tab"> <i class="fa fa-comments"></i> </a>
                    </li>
                    <li>
                        <a href="#demo-asd-tab-3" data-toggle="tab"> <i class="fa fa-wrench"></i> </a>
                    </li>
                </ul>
                <!--================================-->
                <!--End nav tabs-->
                <!-- Tabs Content Start-->
                <!--================================-->
                <div class="tab-content">
                    <!--First tab (Contact list)-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class="tab-pane fade in active" id="demo-asd-tab-1">
                        <h4 class="pad-hor text-thin"> Online Members (7) </h4>
                        <div class="list-group bg-trans">
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av1.png" alt="" class="img-sm">
                                    <i class="on bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">John Knight</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av2.png" alt="" class="img-sm">
                                    <i class="on bottom text-light"></i>
                                </div>
                                <div class="inline-block pad-ver-5">
                                    <div class="text-small">Jose Knight</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av3.png" alt="" class="img-sm">
                                    <i class="on bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Roy Banks</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av7.png" alt="" class="img-sm">
                                    <i class="on bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Steven Jordan</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av4.png" alt="" class="img-sm">
                                    <i class="on bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Scott Owens</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av5.png" alt="" class="img-sm">
                                    <i class="on bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Melissa Hunt</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="pad-hor text-thin"> Busy Members (4) </h4>
                        <div class="list-group bg-trans">
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av1.png" alt="" class="img-sm">
                                    <i class="busy bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">John Knight</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av2.png" alt="" class="img-sm">
                                    <i class="busy bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Jose Knight</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av3.png" alt="" class="img-sm">
                                    <i class="busy bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Roy Banks</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av7.png" alt="" class="img-sm">
                                    <i class="busy bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Steven Jordan</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="pad-hor text-thin"> Offline Members (4) </h4>
                        <div class="list-group bg-trans">
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av1.png" alt="" class="img-sm">
                                    <i class="off bottom text-light"></i>
                                </div>
                                <div class="inline-block pad-ver-5">
                                    <div class="text-small">John Knight</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av2.png" alt="" class="img-sm">
                                    <i class="off bottom text-light"></i>
                                </div>
                                <div class="inline-block pad-ver-5">
                                    <div class="text-small">Jose Knight</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av3.png" alt="" class="img-sm">
                                    <i class="off bottom text-light"></i>
                                </div>
                                <div class="inline-block pad-ver-5">
                                    <div class="text-small">Roy Banks</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="pull-left avatar mar-rgt">
                                    <img src="img/av7.png" alt="" class="img-sm">
                                    <i class="off bottom text-light"></i>
                                </div>
                                <div class="inline-block">
                                    <div class="text-small">Steven Jordan</div>
                                    <small class="text-mute">Available</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End first tab (Contact list)-->
                    <!--Second tab (Settings)-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class="tab-pane fade" id="demo-asd-tab-3">
                        <ul class="list-group bg-trans">
                            <li class="list-header">
                                <h4 class="text-thin">Account Settings</h4>
                            </li>
                            <li class="list-group-item">
                                <div class="pull-right">
                                    <input class="demo-switch" type="checkbox" checked>
                                </div>
                                <p>Show my personal status</p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                            </li>
                            <li class="list-group-item">
                                <div class="pull-right">
                                    <input class="demo-switch" type="checkbox" checked>
                                </div>
                                <p>Show offline contact</p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                            </li>
                            <li class="list-group-item">
                                <div class="pull-right">
                                    <input class="demo-switch" type="checkbox">
                                </div>
                                <p>Invisible mode </p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                            </li>
                        </ul>
                        <hr>
                        <ul class="list-group bg-trans">
                            <li class="list-header">
                                <h4 class="text-thin">Public Settings</h4>
                            </li>
                            <li class="list-group-item">
                                <div class="pull-right">
                                    <input class="demo-switch" type="checkbox" checked>
                                </div>
                                Online status
                            </li>
                            <li class="list-group-item">
                                <div class="pull-right">
                                    <input class="demo-switch" type="checkbox">
                                </div>
                                Show offline contact
                            </li>
                            <li class="list-group-item">
                                <div class="pull-right">
                                    <input class="demo-switch" type="checkbox" checked>
                                </div>
                                Show my device icon
                            </li>
                        </ul>
                        <hr>
                        <h4 class="pad-hor text-thin">Task Progress</h4>
                        <div class="pad-all">
                            <p>Upgrade Progress</p>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                            </div>
                            <small class="text-muted">15% Completed</small>
                        </div>
                        <div class="pad-hor">
                            <p>Database</p>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                            </div>
                            <small class="text-muted">17/23 Database</small>
                        </div>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--Second tab (Settings)-->
                </div>
                <!-- Tabs Content End -->
                <!--================================-->
            </div>
        </div>
    </div>
</aside>
<!--===================================================-->
<!--END ASIDE-->
</div>
<!-- FOOTER -->
<!--===================================================-->

<footer id="footer">
    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pull-right">
        <ul class="footer-list list-inline">
            <li>
                <p class="text-sm">SEO Proggres</p>
                <div class="progress progress-sm progress-light-base">
                    <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                </div>
            </li>
            <li>
                <p class="text-sm">Online Tutorial</p>
                <div class="progress progress-sm progress-light-base">
                    <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                </div>
            </li>
            <li>
                <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
            </li>
        </ul>
    </div>
    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
</footer>