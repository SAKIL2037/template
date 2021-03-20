<?php

/*

type: layout

name: News block

position: 6

*/

?>

<section class="nodrop edit safe-mode" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="white-wrapper">
            <div class="container p-t-40 p-b-40">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="section-title waves center">Last News & Events</h2>
                        <module type="posts"  limit="4" hide-paging="true" data-show="thumbnail,title,read_more,description, created_at"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>