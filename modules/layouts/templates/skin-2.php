<?php

/*

type: layout

name: Home products

position: 2

*/

?>


<section class="nodrop edit safe-mode" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="white-wrapper">
            <div class="container p-t-40 p-b-40">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="section-title waves center">Our favorite products</h2>

                        <div class="allow-drop">
                            <p class="section-paragraph text-center">
                                If you want to meet luxury and friendliness in one place you have already found it.<br/>
                                From your booking, transportation and staying till your leaving we will take care of
                                everything.<br/><br/><br/>
                            </p>
                        </div>

                        <module type="shop/products" id="home-products-<?php print CONTENT_ID; ?>"/>

                        <div class="text-center m-b-40 m-t-40">
                            <module type="btn" text="View more products" url="<?php print site_url(); ?>shop"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>