<?php

/*

type: layout

name: Shop categories

position: 4

*/

?>

<section class="nodrop edit safe-mode" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="white-wrapper">
            <div class="container">
                <div class="p-t-40 p-b-40">
                    <div class="col-xs-12">
                        <h2 class="section-title waves center">Discover Cateogries</h2>

                        <div class="allow-drop">
                            <p class="section-paragraph text-center">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever <br/> since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                            </p>
                        </div>

                        <module type="categories/category_images" id="home-categories-<?php print CONTENT_ID; ?>"/>

                        <br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>