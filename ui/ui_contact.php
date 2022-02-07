<section class="breadcrumb">
    <div class="container">
        <ul class="list-inline">
            <li><a href="index.php" title="Bulb - Responsive eCommerce Electric Shop Free Shopify Theme">Acceuil<i class="fa fa-angle-right"></i></a></li>

            <li>Contact</li>

        </ul>
    </div>
</section>

<!--=================== Main Content Container ===================-->
<!--=================== Contact Template ===================-->
<main class="contact-page">
    <section class="contact-content">
        <div class="container">
            <div class="row">
                <aside class="col-md-3 col-sm-4 col-xs-12 margin-top-60 blog-top-sell paira-gap-2">
                    <h5 class="margin-clear">Ceci peut vous interesser</h5>

                    <?php
                    $sql = "SELECT * FROM t_produit ORDER BY CodeProduit DESC LIMIT 2";
                    $produit=$app->fetchPrepared($sql);
                    foreach($produit as $row){
                        ?>
                        <div class="paira-product product">
                        <a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>">
                            <img src="admin/img/<?php echo $row['Photo'] ?>" alt="Free demo product name 1" class="paira-product-image img-responsive">
                        </a>

                        <div class="product-sale"><span>A vendre</span></div>

                        <div class="product-hover">
                            <a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>" class="btn-lg btn btn-primary margin-top-60 font-size-16">Details</a>
                        </div>
                        <div class="margin-left-10 margin-right-10 product-title-price">
                            <h4 class="margin-top-10"><a href="detail_produit.php?produit=<?php echo $row['CodeProduit'] ?>" class="paira-product-title"><?php echo $row['Produit'] ?></a></h4>

                            <div class=" padding-bottom-10 font-size-16 display-in-b margin-left-10"><span class="money"><?php echo $row['Prix'] ?> $</span></div>

                        </div>
                    </div>
                        <?php
                    }
                    ?>
                    

                    

                </aside>
                <div class="col-md-9 col-sm-19 col-xs-12 margin-top-60 paira-gap-2">
                    <h1 class="margin-clear text-uppercase">Ecrivez-nous</h1>
                    <form method="post" action="" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
                        <div class="row paira-gap-3">


                            <div class="col-md-9">
                                <input name="form_type" type="hidden" value="contact">
                                <input name="utf8" type="hidden" value="✓">
                                <input type="text" class="form-control margin-bottom-20" name="contact[name]" placeholder="Votre nom">
                                <input type="email" class="form-control margin-bottom-20" name="contact[email]" placeholder="Votre adresse mail">
                                <input type="telephone" class="form-control margin-bottom-20" name="contact[phone]" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <textarea rows="10" name="contact[body]" class="form-control margin-bottom-20" placeholder="Votre Message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Envoyer Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>