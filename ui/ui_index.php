<!--=================== Breadcrumb Section ===================-->
<!--=================== Main Content Container ===================-->
<!--=================== Home Page ===================-->
<main class="home-page">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="img/1.jpg" alt="First slide" style="height: 600px; width: 100%;">
            </div>
            <div class="item">
                <img class="second-slide" src="img/2.jpg" alt="Second slide" style="height: 600px; width: 100%;">
            </div>
            <div class="item">
                <img class="third-slide" src="img/3.jpg" alt="Third slide" style="height: 600px; width: 100%;">
            </div>
        </div>
        <div class="container">
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left fa-2x"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-angle-right fa-2x"></i>
            </a>
        </div>
    </div>


    <!--=================== Collection Widget ===================-->
    <section class="collection-list text-center paira-gap-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                        <?php
                        $sql = "SELECT * FROM t_categorie_produit";
                        $categ = $app->fetchPrepared($sql);
                        foreach ($categ as $row) {
                        ?>
                            <div class="col-sm-4 col-md-4 col-xs-12
                                        padding-clear">
                                <div class="collection-item">
                                    <div class="padding-left-15
                                                padding-right-15">
                                        <h3><a href="collections/frontpage.html"><?php echo $row['Categorie'] ?></a></h3>
                                        <a class="btn" href="collections/frontpage.html">Voir plus</a>
                                    </div>
                                    <a href="collections/frontpage.html">
                                        <img style="width: 300px; height: 250px;" src="<?php echo 'admin/img/' . $row['Image'] ?>" alt="Bulb Free demo
                                                    collection 1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>





                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    $sql = "SELECT * FROM t_categorie_produit";
    $categ = $app->fetchPrepared($sql);
    foreach ($categ as $row) {
    ?>
        <section class="top-seller paira-gap-4">
            <div class="container">
                <div class="row">
                    <div class="product-widget">
                        <div class="col-md-3 col-sm-3 col-xs-12
                                    padding-clear">
                            <a href="collections.html" target="_blank"><img src="admin/img/<?php echo $row['Image'] ?>" alt="" class="img-responsive
                                            banner-img"></a>
                            <div class="banner-desc">
                                <h3 class="text-uppercase
                                            margin-bottom-15"><a href="collections.html"><?php echo $row['Categorie'] ?></a></h3>
                                <a href="collections.html" class="text-center text-uppercase">Voir plus</a>
                            </div>
                        </div>

                        <?php
                        $categ = $row['CodeCategorie'];
                        $sql = "SELECT * FROM t_produit WHERE CodeCategorie=$categ ORDER BY Counter DESC LIMIT 3";
                        $prod = $app->fetchPrepared($sql);
                        foreach ($prod as $row) {
                        ?>
                            <div class="col-md-3 col-sm-3 col-xs-12
                                    padding-clear">
                                <!--=================== Product ===================-->
                                <div class="paira-product product">
                                    <a href="products/free-demo-product-name-1.html">
                                        <img src="admin/img/<?php echo $row['Photo'] ?>" class="paira-product-image
                                                img-responsive" style="height: 300px; width: 100%;">
                                    </a>

                                    <div class="product-hover">
                                        <a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>" class="btn-lg btn btn-primary
                                                margin-top-60 font-size-16">Details</a>
                                    </div>
                                    <div class="margin-left-10
                                            margin-right-10
                                            product-title-price">
                                        <h4 class="margin-top-10"><a href="products/free-demo-product-name-1.html" class="paira-product-title"><?php echo $row['Produit'] ?></a></h4>


                                        <div class="padding-bottom-10
                                                font-size-16 display-in-b
                                                margin-left-10"><span class="money"><?php echo $row['Prix'] ?> $</span></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>








                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>





</main>
<style>
    .collection-list {
        margin-top: -100px;
    }
</style>
<!--=================== Footer Container ===================-->
<!--=================== Footer ===================-->