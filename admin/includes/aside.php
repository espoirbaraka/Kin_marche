 <aside class="main-sidebar">
   <section class="sidebar">
     <div class="user-panel">
       <div class="pull-left image">
         <img src="<?php echo (!empty($req['Photo'])) ? 'img/' . $req['Photo'] : 'img/user.png'; ?>" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p><?php echo $req['Username']; ?></p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- search form -->
     <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header">GESTION</li>
       <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Acceuil</span></a></li>
       <li><a href="produit.php"><i class="fa fa-shopping-basket"></i> <span>Produit</span></a></li>
       <li><a href="paiement.php"><i class="fa fa-money"></i> <span>Paiement</span></a></li>

       <li class="header">PARAMETRES</li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span>Paramètres</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="categorie_produit.php"><i class="fa fa-circle-o"></i> Categories produits</a></li>
           <li><a href="user.php"><i class="fa fa-circle-o"></i> Utilisateurs</a></li>
         </ul>
       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>