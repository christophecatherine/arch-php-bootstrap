
    <!-- Modal Se Connecter -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal de connexion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <!-- Tabs (header) -->
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="home" aria-selected="true">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lostPassword" role="tab" aria-controls="profile" aria-selected="false">Passe oublié ?</a>
              </li>
            </ul>
            <!-- / Tabs -->

            <div class="tab-content py-2" id="myTabContent">

              <!-- Creer un compte -->
              <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="home-tab">
                <div class="register-heading">
                  <h3>Créé un compte Utilisateur</h3>
                </div>

                <form action="./controller/user/create.php" method="POST">
                  <div class="row register-form" style="width: 100%">

                    <div class="form-group col-md-6 col-sm-12">
                      <label>Nom :</label>
                      <input type="text" class="form-control" name="name" placeholder="Tux" required />
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                      <label>E-mail :</label>
                      <input type="email" class="form-control" name="email" placeholder="Email *" value="" required>
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                      <label>Téléphone :</label>
                      <input type="text" class="form-control" name="mobile" placeholder="Téléphone" value="" required>
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                      <label>Mot de passe :</label>
                      <input type="password" class="form-control" name="password" placeholder="Password *" value="" required />
                    </div>
                    <!-- <div class="form-group col-md-6 col-sm-12">
                      <label>Répéter mot de passe :</label>
                      <input type="password" class="form-control" name="password2" placeholder="Confirm Password *" value="" required>
                    </div> -->

                    <div class="form-group p-2 text-center col-md-12 col-sm-12">
                      <button type="submit" class='btn btn-primary' value="Connexion">
                        Creer un compte
                      </button>
                    </div>

                  </div>
                </form>

              </div>
              <!-- / Creer un compte -->

              <!-- Se connecter -->
              <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3 class="register-heading">Se Connecter</h3>
                <form action="./controller/user/login.php" method="POST">
                  <div class="row register-form">

                    <div class="form-group col-md-6 col-sm-12">
                      <label>Email :</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" required />
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                      <label>Mot de passe :</label>
                      <input type="password" name="password" class="form-control" placeholder="Password *" required />
                    </div>
                    <div class="form-group p-2 text-center col-md-12 col-sm-12">
                      <input type="submit" class="btnRegister" value="Connexion" />
                    </div>

                  </div>
                </form>
              </div>
              <!-- / Se connecter -->

              <!-- Mot de passe oublier -->
              <div class="tab-pane fade show" id="lostPassword" role="tabpanel" aria-labelledby="profile-tab">
                <h3 class="register-heading">Mot de passe oublié ?</h3>
                <form action="/login/lostPassword" method="POST" enctype="multipart/form-data">
                  <div class="row register-form">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email :</label>

                        <div class="form-group p-2 text-center col-md-12 col-sm-12">
                          <input type="email" name="email" class="form-control" placeholder="Email" required />
                          <input type="submit" class="btnRegister mt-2" value="Connexion" />
                        </div>

                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Mot de passe oublier -->

            </div>

            <div class="modal-footer">
              <div class="list-group">
                <a class="list-group-item list-group-item-danger error">Erreur : Information érroné</a>
                <a class="list-group-item list-group-item-success error">Success ! Vous êtes en attentes d'être confirmer par un admin</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- / Modal -->