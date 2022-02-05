<!-- Add -->
<div class="modal fade" id="addcategorie">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter une categorie</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="manager/create.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="event" value="CREATE_CATEGORIE" required>
                    <label for="nom" class="col-sm-3 control-label">Categorie</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="categorie" name="categorie" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="postnom" class="col-sm-3 control-label">Image</label>

                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                </div>
                

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Enregistrer</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Modifier la categorie</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="manager/update.php">
                <input type="hidden" class="categorie" name="id">
                <input type="hidden" name="event" value="UPDATE_CATEGORIE">
                <div class="form-group">
                    <label for="edit_username" class="col-sm-3 control-label">Categorie</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_categorie" name="categorie">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Modifier</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Suppression...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="manager/delete.php">
                <input type="hidden" class="categorie" name="id">
                <input type="hidden" name="event" value="DELETE_CATEGORIE">
                <div class="text-center">
                    <p>SUPPRIMER LA CATEGORIE</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Supprimer</button>
              </form>
            </div>
        </div>
    </div>
</div>




