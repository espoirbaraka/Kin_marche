<!-- Add -->
<div class="modal fade" id="adduser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter un utilisateur</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="manager/create.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="event" value="CREATE_USER" required>
                    <label for="nom" class="col-sm-3 control-label">Username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="postnom" class="col-sm-3 control-label">Mail</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-sm-3 control-label">Mot de passe</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
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
              <h4 class="modal-title"><b>Modifier l'utilisateur</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="manager/update.php">
                <input type="hidden" class="user" name="id">
                <input type="hidden" name="event" value="UPDATE_USER">
                <div class="form-group">
                    <label for="edit_username" class="col-sm-3 control-label">Username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_mail" class="col-sm-3 control-label">Mail</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_mail" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
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
                <input type="hidden" class="user" name="id">
                <input type="hidden" name="event" value="DELETE_USER">
                <div class="text-center">
                    <p>SUPPRIMER L'UTILISATEUR</p>
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




