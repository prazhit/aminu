<?php get_header(); ?>

<main id="content" class="page-content" role="main">
    <div class="container">
        <!-- Register Form  -->
        <div class="container section-padding">
            <div id="template" class="form-wrapper form-wrapper--small aos-init aos-animate" data-aos="fade-in"=""="">
                <div id="customer">
                    <!-- Create Customer -->
                    <div id="create-customer">
                        <div class="auth__header">
                            <h2 class="title">Create Account</h2>
                        </div>

                        <form method="post" action="#" id="create_customer" accept-charset="UTF-8" data-login-with-shop-sign-up="true">
                            <input type="hidden" name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">

                            <div class="input-row">
                                <label for="first_name" class="login">First Name</label>
                                <input type="text" value="" name="customer[first_name]" id="first_name" class="large" size="30">
                            </div>

                            <div class="input-row">
                                <label for="last_name" class="login">Last Name</label>
                                <input type="text" value="" name="customer[last_name]" id="last_name" class="large" size="30">
                            </div>

                            <div class="input-row">
                                <label for="email" class="login">Email</label>
                                <input type="email" value="" name="customer[email]" id="email" class="large" size="30">
                            </div>

                            <div class="input-row">
                                <label for="password" class="login">Password</label>
                                <input type="password" value="" name="customer[password]" id="password" class="large password" size="30">
                            </div>

                            <div class="form-action">
                                <button class="btn" type="submit">Create</button>
                                <span class="note">
                                    <a href="<?php echo site_url('/login') ?>">Log in with an existing account</a>
                                    or
                                    <a href="<?php echo home_url() ?>">Return to Store</a>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- /#create-customer -->
                </div>
            </div>
        </div>
        <!-- / Register Form  -->
    </div>
</main>


<?php get_footer(); ?>