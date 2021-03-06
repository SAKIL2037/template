<script>mw.moduleCSS("<?php print modules_url(); ?>users/users_modules.css")</script>


<?php if (is_logged() == false): ?>
    <div class="iq-works-box text-left m-40 boots-form">
        <div class="box-static box-border-top padding-30" id="form-holder{rand}">
            <div class="box-title margin-bottom-30">
                <h2 class="size-20">
                    <?php if (!isset($form_title) or $form_title == false): ?>
                        <?php _lang("Enter your username or email", "templates/bamboo"); ?>
                    <?php else: ?>
                        <?php print $form_title; ?>
                    <?php endif; ?>
                </h2>
            </div>

            <div class="alert alert-mini alert-danger margin-bottom-30" style="margin: 0;display: none;"></div>
            <br/>
            <form method="post" id="user_forgot_password_form{rand}" action="#" autocomplete="off">
                <div class="clearfix">
                    <!-- Email -->
                    <div class="form-group">
                        <label><?php _lang("Email or username", "templates/bamboo"); ?></label>
                        <label class="input margin-bottom-10">
                            <i class="ico-append fa fa-envelope"></i>
                            <input required="" type="text" name="username">
                            <b class="tooltip tooltip-bottom-right"><?php _lang("Needed to verify your account", "templates/bamboo"); ?></b>
                        </label>
                    </div>

                    <module type="captcha"/>
                </div>

                <div class="row">
                    <div class="col-12 text-right">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> <?php print $form_btn_title; ?></button>
                    </div>
                </div>
            </form>

            <hr/>

        </div>
    </div>
<?php endif; ?>