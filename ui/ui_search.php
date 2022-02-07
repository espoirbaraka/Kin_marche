<?php
$search = $_GET['search'];
$word = '%'.$search.'%';
$sql = "SELECT * FROM t_produit where Produit LIKE '$word'";
$produit = $app->fetchPrepared($sql);
?>
<section class="breadcrumb">
    <div class="container">
        <ul class="list-inline">
            <li><a href="index.php" title="Bulb - Responsive eCommerce Electric Shop Free Shopify Theme">Home<i class="fa fa-angle-right"></i></a></li>


            <li>Resultat sur <?php echo $search ?></li>


        </ul>
    </div>
</section>

<!--=================== Main Content Container ===================-->
<!--=================== Collection Template ===================-->
<main class="collection-page">
    <!--=================== Collections Product Section ===================-->
    <section class="collection-content paira-gap-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 margin-top-60">
                    <div class="paira-collection-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 paira-gap-4 padding-clear">
                                <h1 class="margin-clear text-left text-uppercase">Resultat sur <?php echo $search ?></h1>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 paira-gap-4 padding-clear pull-right">
                                
                            </div>
                        </div>

                        <div class="row paira-grid-view">

                            <?php
                            foreach ($produit as $row) {
                            ?>
                                <div class="col-md-3 col-sm-3 col-xs-12 padding-clear">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product">
                                        <a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>">
                                            <img style="height: 200px;" src="admin/img/<?php echo $row['Photo'] ?>" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>

                                        <div class="product-sale"><span>A vendre</span></div>

                                        <div class="product-hover">
                                            <a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>" class="btn-lg btn btn-primary margin-top-60 font-size-16">Detail</a>
                                        </div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h4 class="margin-top-10"><a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>" class="paira-product-title"><?php echo $row['Produit'] ?></a></h4>

                                            <div class=" padding-bottom-10 font-size-16 display-in-b margin-left-10"><span class="money"><?php echo $row['Prix'] ?> $</span></div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>





                        </div>

                        <div class="row paira-gap-3">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <!--=================== pagination ===================-->
                                <ul class="list-inline pagination margin-clear">

                                    <li class="disabled"><a><i class="fa fa-long-arrow-left"></i></a></li>



                                    <li class="active font-bold"><span>1</span></li>



                                    <li><a href="all4658.html?page=2"><span>2</span></a></li>



                                    <li><a href="all4658.html?page=2" class="prev-page"><i class=" fa fa-long-arrow-right"></i></a></li>

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</main>