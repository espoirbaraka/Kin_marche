        <!--=================== Breadcrumbs ===================-->
        <section class="breadcrumb">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.php" title="Bulb - Responsive eCommerce Electric Shop Free Shopify Theme">Acceuil<i class="fa fa-angle-right"></i></a></li>

                    <li>Se connecter</li>

                </ul>
            </div>
        </section>

        <main class="login-page">
            <section class="login-content margin-top-60 paira-gap-2">
                <div class="container">
                    <div class="row">
                        <div id="login">
                            <div class="col-md-12 paira-gap-4">
                                <h1 class="margin-clear text-uppercase">Se connecter</h1>
                            </div>
                            <div class="col-md-5">
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
                                    <div class="col-md-12">
                                        <form method="post" action="manager/login.php" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />

                                            <label>Email</label>
                                            <input type="email" value="" name="email" class="form-control margin-bottom-10" id="customer_email" />

                                            <label>Password</label>
                                            <input type="password" value="" name="password" class="form-control margin-bottom-10" id="customer_password" size="16" />
                                            <button type="submit" name="submit" class="btn btn-default pull-left">Se connecter</button>
                                            <a href="#" class="pull-right" data-toggle="modal" data-target="#paira-forget-password">
                                                <h5>Mot de passe oublié?</h5>
                                            </a>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="recover-password" style="display:none">
                            <div class="col-md-12 paira-gap-4">
                                <h1 class="margin-clear text-uppercase">Reset Password</h1>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="margin-top-20">We will send you an email to reset your password.</h5>

                                        <form method="post" action="https://bulb-free-responsive-theme.myshopify.com/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                                            <input type="email" placeholder="Email Address" value="" size="30" name="email" id="recover-email" class="form-control margin-bottom-10" />
                                            <button type="submit" class="btn btn-default pull-left">Reset</button>
                                            <button onclick="hideRecoverPasswordForm();return false;" class="btn btn-default pull-left margin-left-10">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="login" class="col-md-7 text-center">
                            <h4 class="margin-bottom-20 margin-top-40">Etez-vous nouveau ?</h4>
                            <a href="register.html" class="btn btn-success btn-lg">Créer un compte</a>
                        </div>

                    </div>
                </div>
            </section>
        </main>
        <script type="text/javascript">
            function showRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'block';
                document.getElementById('login').style.display = 'none';
            }

            function hideRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'none';
                document.getElementById('login').style.display = 'block';
            }
            if (window.location.hash == '#recover') {
                showRecoverPasswordForm()
            }
        </script>