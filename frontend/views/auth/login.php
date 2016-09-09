<?php $this->load->view('header', array('menu_style' => 'dark')); ?>

    <div class="main-wraper padd-100">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2 underline">LOG IN</h4>
                        <h2>Welcome to LocalAventura</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

                    <div class="second-description text-center">
                       Enter your credentials to access the members area.<br/>
                        <?php
                            switch ($this->input->get('msj')) {
                                case 'error': ?>
                                    <div class="alert alert-danger" role="alert">
                                        <em>Username or password incorrect.</em>
                                    </div>
                                <?php break;

                                case 'activated': ?>
                                    <div class="alert alert-success" role="alert">
                                        <em>Your account has been activated, now you can log in.</em>
                                    </div>
                                <?php break;

                                case 'reactivated': ?>
                                    <div class="alert alert-success" role="alert">
                                        <em>Your password has been updated, please log in again.</em>
                                    </div>
                                <?php break;
                            }
                        ?>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4">

                    <form class="login-form" action="<?php echo site_url('auth/validate_auth?bc='.$bc); ?>" method="POST">
                      <fieldset>

                        <div class="input-style-1 type-2 color-2">
                            <input type="text" id="user" name="user" placeholder="Enter your email">
                        </div>

                        <div class="input-style-1 type-2 color-2">
                            <input type="password" id="pass" name="pass" placeholder="Enter your password">
                        </div>

                        <p class="text-center">
                            <button type="submit" class="c-button bg-blue">Log in</button>
                            <a href="<?php echo site_url('login/recovery'); ?>" class="btn btn-link">Forgot your password?</a>
                        </p>

                      </fieldset>
                    </form>

                </div>
            </div>

        </div>
    </div>

<?php $this->load->view('footer'); ?>
