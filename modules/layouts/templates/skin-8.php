<?php

/*

type: layout

name: Head Image with Title

position: 8

*/

?>

<?php if (content_title()) {
    $title = content_title();
} else {
    $title = 'Page Title';
}
?>
<section class="nodrop  safe-mode" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="page-banner-section section mw-image-holder">
            <img src="<?php thumbnail(''); ?>" alt=""/>
            <span class="mw-image-holder-overlay"></span>
            <div class="mw-image-holder-content">
                <div class="container">
                    <div class="">
                        <div class="col-xs-12">
                            <div class="page-banner-content-wrapper">
                                <div class="page-banner-content">
                                    <h1><?php print $title ?></h1>
                                    <module type="breadcrumb" id="shop-breadcrumbs-<?php print PAGE_ID; ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>