<?php

/*

type: layout

name: Default

description: Testimonials displayed in Slider

*/

?>


<script>mw.module_css("<?php print $config['url_to_module'] ?>templates/templates.css", true);</script>
<script>mw.module_css("<?php print $config['url_to_module'] ?>templates/js/slick.css", true);</script>
<script>mw.require("<?php print $config['url_to_module'] ?>templates/js/slick.min.js", true);</script>
<script>
    $(document).ready(function () {
        $("#<?php print $params['id']; ?> .mw-testimonials-slider").slick({
            infinite: true,
            dots: true,
            prevArrow: '<span class="slick-prev"><span class="mw-icon-prev-thick"></span></span>',
            nextArrow: '<span class="slick-next"><span class="mw-icon-next-thick"></span></span>'
        });
    })
</script>


<div class=" testimonials-slider">
    <div class="mw-testimonials mw-testimonials-slider">
        <?php $data = get_testimonials(); ?>

        <?php foreach ($data as $item) : ?>
            <div class="mw-testimonials-item">
                <span class="mw-testimonials-item-image" style="background-image: url(<?php print $item['client_picture']; ?>);"></span>
                <div class="mw-testimonials-item-content">
                    <?php if (isset($item['client_website'])) { ?>
                        <h4><a href="<?php print $item['client_website']; ?>" target="_blank"><?php print $item['name']; ?></a></h4>
                    <?php } else { ?>
                        <h5><?php print $item['name']; ?></h5>
                    <?php } ?>

                    <p><?php print $item['content']; ?></p>
                    <?php if (isset($item["read_more_url"])) { ?>
                        <div><a href="<?php print $item["read_more_url"]; ?>" target="_blank"><?php _e('Read more'); ?></a></div>
                    <?php } ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>