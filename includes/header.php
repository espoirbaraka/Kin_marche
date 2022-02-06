<body>
    <div class="paira-container">
        <header>
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 logo-text">
                            <h2 class="margin-bottom-20"><a href="index.php">Kin Marche</a></h2>


                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 all-link">
                            <?php
                            if (isset($_SESSION['client'])) {
                            ?>
                                <ul class="list-inline margin-clear pull-right">
                                    <li><a href="manager/logout.php"><?php echo $_SESSION['username']; ?></a></li>

                                </ul>
                            <?php
                            } else {
                            ?>
                                <ul class="list-inline margin-clear pull-right">
                                    <li>
                                        <a href="login.php">Se connecter</a>
                                    </li>
                                    <li><a href="account/register.html">S'inscrire</a></li>
                                </ul>
                            <?php
                            }
                            ?>

                            <ul class="list-inline margin-bottom-0
                                    pull-right">
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    $cout = 0;
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        $cout = $cout + $value['prix'] * $value['quantite'];
                                    }
                                ?>
                                    <li class="dropdown cart-menu-body
                                        paira-cart-menu-body">
                                        <a href="cart.php" class="padding-bottom-10"><i class="fa fa-shopping-cart"></i>
                                            <span class="paira-cart-total-price"><span class="money"><?php echo number_format($cout) ?> $</span></span>
                                            <span class="badge
                                                paira-cart-item-count"><?php echo count($_SESSION['cart']) ?></span></a>
                                    </li>
                                <?php
                                }
                                ?>

                            </ul>

                            <!--=================== Search Form ===================-->
                            <div class="dropdown navbar-form navbar-right
                                    navbar-search search-xs-fix pull-right
                                    margin-top-25">
                                <a data-toggle="dropdown" href="#" class="margin-right-10"><i class="fa
                                            fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <form class="navbar-form" action="https://bulb-free-responsive-theme.myshopify.com/search">
                                        <div class="form-group">
                                            <input type="text" name="q" class="form-control" placeholder="Search" value="">
                                        </div>
                                        <button type="submit"><i class="fa
                                                    fa-search"></i></button>
                                    </form>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--=================== Header Bottom Section ===================-->
            <section class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!--=================== Main Menu ===================-->
                            <!--=================== Multi Layout Mega Menu ===================-->
                            <nav class="navbar navbar-default
                                    paira-mega-menu mega-menu">
                                <div class="navbar-header">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="navbar-collapse" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav text-center">
                                        <li class="active">
                                            <a href="index.php">Acceuil</a>
                                        </li>



                                        <li class="">
                                            <a href="catalogue.php">Catalogue</a>
                                        </li>



                                        <li class="">
                                            <a href="blogs/news.html">Blog</a>
                                        </li>





                                        <li class="">
                                            <a href="pages/contact.html">Contactez nous</a>
                                        </li>


                                    </ul>
                                </div>
                            </nav>
                            <script>
                                $(function() {
                                    /***************************************************************************************
                                     * Mega Menu
                                     ***************************************************************************************/
                                    $(document).on('click', '.paira-mega-menu .paira-dropdown-menu', function(e) {
                                        e.stopPropagation();
                                    });
                                    $(document).on('click', '.paira-mega-menu .paira-angle-down', function(e) {
                                        e.preventDefault();
                                        $(this).parents('.paira-dropdown').find('.paira-dropdown-menu').toggleClass('active');
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </section>
        </header>