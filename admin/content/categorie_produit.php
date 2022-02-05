<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorie des produits
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="active">Categorie des produits</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Erreur!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Succès!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="overflow: auto;">
            <div class="box-header">
                <a href="#addcategorie" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
                <button class="btn btn-primary btn sm btn-flat" onclick="imprimer();" style="float: right;">Imprimer</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Categorie</th>
                    <th>Nombre des produits</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT t_categorie_produit.CodeCategorie, Produit, Image, Categorie ,COUNT(CodeProduit) as nbre FROM t_categorie_produit
                        LEFT JOIN t_produit
                        ON t_categorie_produit.CodeCategorie=t_produit.CodeCategorie
                        GROUP BY Categorie";
                  $req = $app->fetchPrepared($sql);
                  foreach($req as $row){
                    ?>
                    <tr>
                        <td><img src="<?php echo 'img/'.$row['Image']; ?>" style="width: 30px; height: 30px;"></td>
                        <td><?php echo $row['Categorie']; ?></td>
                        <td><?php echo $row['nbre']; ?></td>
                        <td>
                            <i class='fa fa-edit edit btn btn-primary btn-sm' data-id="<?php echo $row['CodeCategorie'] ?>"></i>
                            <i class='fa fa-trash delete btn btn-danger btn-sm' data-id="<?php echo $row['CodeCategorie'] ?>"></i>
                        </td>
                    </tr>
                    <?php
                  }
                  ?>
                    
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>




