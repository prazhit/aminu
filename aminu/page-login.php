<?php get_header(); ?>

<main id="content" class="page-content" role="main">
    <div class="container">
        <!-- Banner  -->
        <div class="login-section section-padding">
            <div class="container">
                <div class="cc-animate-init -in cc-animate-complete aos-init aos-animate" data-aos="fade-in">
                    <div class="form-wrapper form-wrapper--small">
                        <div id="customer">
                            <div class="auth__header">
                                <h2 class="title">Login</h2>
                            </div>

                            <form method="post" action="#" id="customer-login" accept-charset="UTF-8" data-login-with-shop-sign-in="true">
                                <input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">

                                <div id="login_email" class="input-row">
                                    <label for="customer_email" class="login">Email</label>
                                    <input type="email" value="" name="customer[email]" id="customer_email" class="large" size="30">
                                </div>

                                <div id="login_password" class="input-row">
                                    <label for="customer_password" class="login">Password</label>
                                    <div class="text-over-input">
                                        <input type="password" value="" name="customer[password]" id="customer_password" class="large password" size="16">
                                        <div id="forgot_password" class="text-over-input__text">
                                            <a href="#" class="forget-your-password">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-action">
                                    <div class="form-action__row">
                                        <button class="btn" type="submit">Sign In</button>

                                        <a href="<?php echo site_url('/register') ?>">Create account</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="recover-password">
                            <form method="post" action="./account/recover" accept-charset="UTF-8">
                                <input type="hidden" name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">

                                <div class="auth__header">
                                    <h2 class="title">Reset your password</h2>

                                    <p class="note">
                                        We will send you an email to reset your password.
                                    </p>
                                </div>

                                <div id="recover_email" class="input-row">
                                    <label for="recover-email" class="large">Email</label>
                                    <input type="email" value="" size="30" name="email" id="recover-email" class="large">
                                </div>
                                <div class="action_bottom">
                                    <p>
                                        <button class="btn" type="submit">Submit</button>
                                    </p>
                                    <span class="note"><a href="#" class="cancel-recover">Cancel</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /layout-column-half-left" -->
                </div>
            </div>
        </div>
        <!-- / Banner  -->
    </div>
</main>

<?php get_footer(); ?>