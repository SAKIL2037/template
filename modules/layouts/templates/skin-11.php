<?php

/*

type: layout

name: Contact form block 2

position: 11

*/

?>

<section class="nodrop edit safe-mode" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="white-wrapper">
            <div class="container p-t-40 p-b-40">
                <div class="">
                    <div class="col-xs-12">
                        <h1 class="section-title waves center">Contact us</h1>
                    </div>

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 m-b-20">
                                <div class="info allow-drop">
                                    <p>Pleasee contact us in a way you prefer more.</p>
                                    <p>Find our details and let us know how we can help you or how to provide you with better service. Thannk you!</p>
                                    <br/><br/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="row">
                                    <div class="col-sm-4 col-md-12 col-lg-6 m-b-20">
                                        <module type="btn" id="<?php print $params['id'] ?>-contact-button-1" template="skin-1" text="Electron Center New Yourk"/>
                                    </div>
                                    <div class="col-sm-4 col-md-12 col-lg-6 m-b-20">
                                        <module type="btn" id="<?php print $params['id'] ?>-contact-button-2" template="skin-1" text="0888 888 888" class=" btn-block"/>
                                    </div>
                                </div>
                                <module type="contact_form" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</section>