<?php

/*

type: layout

name: Contact form

description: Basic contact form

*/

?>

<div id="msg<?php print $form_id; ?>" style="display:none;">
    <div class="alert alert-success">
        <h2>Form has been sent</h2>
        <p>We will contact you soon with a responce.</p>
    </div>
</div>

<form class="mw_form form contact-form" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form() ?>
    <input type="hidden" name="for" value="contact_form"/>
    <input type="hidden" name="for_id" value="<?php print $params['id']; ?>"/>
    <div class="row m-b-10">
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="First name" name="first_name" class="form-control form_input">
        </div>
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="Last name" name="last_name" class="form-control form_input">
        </div>
    </div>
    <div class="row m-b-10">
        <div class="col-xs-12 col-sm-6">
            <input type="email" placeholder="E-mail" name="email" class="form-control form_input">
        </div>
        <div class="col-xs-12 col-sm-6">
            <input type="tel" placeholder="Phone" name="phone" class="form-control form_input">
        </div>
    </div>

    <div class="row m-b-10">
        <div class="col-xs-12">
            <textarea placeholder="Message" rows="4" class="form-control form_textarea" name="message"></textarea>
        </div>
    </div>

    <div class="row m-b-10">
        <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
            <module type="captcha" />
        <?php endif; ?>

        <div class="col-xs-12">
            <button type="submit" class="btn btn-default btn-block"><i class="fa fa-envelope"></i> &nbsp; Send message</button>
        </div>
    </div>
</form>
