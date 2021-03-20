<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>
<script>
    mw.lib.require('bootstrap3');
</script>

<div class="edit" field="electron_content" rel="content">
    <module type="layouts" template="skin-8"/>
</div>

<div class="container-fluid">
    <div class="white-wrapper">
        <div class="container p-t-40 p-b-40">

            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-9">
                    <module data-type="posts" template="skin-1" id="blog-posts-<?php print PAGE_ID; ?>" limit="4" hide-paging="true" data-show="thumbnail,title,read_more,description, created_at"/>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-3">
                    <?php include_once "blog_sidebar.php"; ?>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>
