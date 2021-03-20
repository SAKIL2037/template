<?php

/*

type: layout

name: Contacts block

position: 7

*/

?>

<section class="nodrop edit safe-mode" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="white-wrapper">
            <div class="container">
                <div class="p-t-40 p-b-40">
                    <div class="col-xs-12">
                        <h2 class="section-title waves center">Location / Contact Us</h2>

                        <div class="allow-drop">
                            <p class="section-paragraph text-center">
                                Write us an e-mail or call us on the phone bellow. We will contact you back very
                                soon.<br/>
                                as soon as posible!
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-6 m-b-20">
                                <module type="google_maps"/>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="row">
                                    <div class="col-sm-4 col-md-12 col-lg-6 m-b-20">
                                        <module type="btn" id="<?php print $params['id'] ?>-contact-button-1"
                                                template="skin-1" text="Electron"/>
                                    </div>
                                    <div class="col-sm-4 col-md-12 col-lg-6 m-b-20">
                                        <module type="btn" id="<?php print $params['id'] ?>-contact-button-2"
                                                template="skin-1" text="01 234 567" class=" btn-block"/>
                                    </div>
                                </div>
                                <module type="contact_form" id="<?php print $params['id'] ?>-contact_form"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>