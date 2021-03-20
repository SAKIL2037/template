<?php include template_dir() . "header.php"; ?>
<script>
    mw.lib.require('bootstrap3');
    mw.lib.require('bootstrap_datepicker');
    $(document).ready(function () {
        $('input.datepicker').datepicker();
    });
    
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<div>
    <module type="layouts" template="skin-8"/>

    <div class="container-fluid nodrop safe-mode">
        <div class="white-wrapper">
            <div class="container p-t-40 p-b-40">

                <div class="">
                    <div class="col-sm-7 col-md-7">
                        <module type="pictures" rel="content" template="product_gallery_4"/>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-sm-5 col-md-5">
                        <?php load_layout_block('shop/shop-info-1'); ?>

                        <!-- <div class="help-box" rel="sidebar_help" field="global">
                            <h3>Need help</h3>
                            <div class="info allow-drop">
                                <p>If you have any questions please don’t hesitate to contact us</p>
                                <p>
                                    <i class="fa fa-phone"></i> 001 222 333<br/>
                                    <i class="fa fa-envelope"></i> info@yourwebsite.com<br/>
                                </p>
                            </div>
                        </div> -->
                    </div>

                    <div class="col-xs-12">
                        <h1 class="edit section-title waves" field="title" rel="content">Product Information</h1>

                        <div class="">
                            <?php if (!is_ajax()): ?>
                                <div class="row">
                                    <!-- Nav tabs -->
                                    <div class="col-xs-12">
                                        <ul class="tab-list">
                                            <li class="active"><a href="#more-info" data-toggle="tab" class="btn btn-default">More info</a></li>
                                            <li><a href="#data-sheet" data-toggle="tab" class="btn btn-default">Data sheet</a></li>
                                            <li><a href="#reviews" data-toggle="tab" class="btn btn-default">Reviews</a></li>
                                        </ul>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content col-xs-12">
                                        <div class="pro-info-tab tab-pane active" id="more-info">
                                            <div class="edit description allow-drop" field="content_body" rel="post">
                                                <p>This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to
                                                    position it
                                                    anywhere on the site. Get creative &amp; <strong>Make Web</strong>.</p>
                                            </div>
                                        </div>
                                        <div class="pro-info-tab tab-pane" id="data-sheet">
                                            <div class="table-responsive">
                                                <div class="edit" field="product_sheets" rel="content">
                                                    <table class="table-data-sheet">
                                                        <tbody>
                                                        <tr class="odd">
                                                            <td>Compositions</td>
                                                            <td>Cotton</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>Styles</td>
                                                            <td>Casual</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>Properties</td>
                                                            <td>Short Sleeve</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-info-tab tab-pane" id="reviews">
                                            <module type="comments" content-id="<?php print CONTENT_ID; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <h4 class="edit section-title waves" field="related_products_title" rel="inherit">Related Products</h4>

                        <div class="row">
                            <module type="shop/products" template="skin-1" related="true" limit="4" id="featured-products"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
