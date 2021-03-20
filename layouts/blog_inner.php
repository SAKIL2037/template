<?php include template_dir() . "header.php"; ?>
<script>
    mw.lib.require('bootstrap3');
    mw.lib.require('bootstrap_datepicker');
    $(document).ready(function () {
        $('input.datepicker').datepicker();
    });
</script>

<div>
    <div class="container-fluid nodrop safe-mode" id="blog-content-<?php print CONTENT_ID; ?>">
        <div class="white-wrapper">
            <div class="col-xs-12"><hr /></div>

            <div class="container p-t-30 p-b-40">
                <div class="col-xs-12 col-md-8 col-lg-9 allow-drop">
                    <div class="m-b-20">
                        <h1 class="edit m-t-0" field="title" rel="post">Page Title</h1>
                    </div>
                    <module data-type="pictures" data-template="slider" rel="content"/>

                    <div class="inner-content">
                        <div class="edit" field="content" rel="content">
                            <div class="element">
                                <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere
                                    on
                                    the
                                    site. Get creative, Make Web.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 m-t-10">
                                <module type="sharer" >
                            </div>
                        </div>

                        <div class="edit" rel="content" field="comments">
                            <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-3">
                    <?php include_once "blog_sidebar.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
