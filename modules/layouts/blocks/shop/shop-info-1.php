<?php
$next = next_content();

$prev = prev_content();
?>

<script>mw.moduleCSS("<?php print modules_url(); ?>layouts/blocks/styles.css"); </script>

<?php if (!is_ajax()): ?>
    <div class="product-info-layout-1">
        <div class="next-previous-content">
            <?php if ($prev != false) { ?>
                <a href="<?php print content_link($prev['id']); ?>" class="prev-content tip" data-tip="#prev-tip"><i class="material-icons">arrow_backward</i></a>
                <div id="prev-tip" style="display: none">
                    <div class="next-previous-tip-content">
                        <img src="<?php print get_picture($prev['id']); ?>" alt="" width="90"/>
                        <h6><?php print $prev['title']; ?></h6>
                    </div>
                </div>
            <?php } ?>

            <a href="<?php print site_url(); ?>shop"><i class="material-icons">reorder</i></a>

            <?php if ($next != false) { ?>
                <a href="<?php print $next['url']; ?>" class="next-content tip" data-tip="#next-tip"><i class="material-icons">arrow_forward</i></a>
                <div id="next-tip" style="display: none">
                    <div class="next-previous-tip-content">
                        <img src="<?php print get_picture($next['id']); ?>" alt="" width="90"/>
                        <h6><?php print $next['title']; ?></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>

<div class="product-details section">
    <!-- Title -->
    <h1 class="edit title" field="title" rel="post">Product Name</h1>
    <!-- Price Ratting -->
    <div class="price-ratting section">
        <!-- Ratting -->
        <span class="ratting float-right">
            <module type="rating" content-id="<?php print CONTENT_ID; ?>"/>
        </span>
    </div>
    <!-- Short Description -->
    <div class="short-desc section">
        <h3>Quick Overview</h3>
        <div class="edit" field="quick_overview" rel="post">
            <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
                slightly believable. make an ami jani na.</p>
        </div>
    </div>

    <div class="clearfix"></div>

    <module type="shop/cart_add" template="default"/>

    <div class="clearfix"></div>


    <!-- Share -->
    <!-- <module type="sharer" id="product-sharer"> -->
</div>

