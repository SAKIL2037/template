<?php

/*

  type: layout

  name: Default

  description: Default



*/

?>
<script>
    mw.require("<?php print $config['url_to_module'];?>style.css");
</script>

<?php $rand = uniqid(); ?>
<div class="mw-module-images">
    <div class="mw-pictures-gallery" id="mw-gallery-<?php print $rand; ?>">
        <?php
        if ($data != false) {
            foreach ($data as $key => $item) { ?>
                <?php
                $classHelper = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
//                if ($key == 1) {
//                    $classHelper = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
//                } else {
//                    $classHelper = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
//                }
                ?>


                <div class="<?php print $classHelper ?> mw-pictures-item mw-pictures-item-<?php print $item['id']; ?>">
                    <a href="<?php print category_link($item['id']); ?>" style="background-image: url('<?php print thumbnail($item['picture'], 600); ?>');">
                        <!--                        <span>--><?php //print $item['title']; ?><!--</span>-->
                    </a>

                    <a href="<?php print category_link($item['id']); ?>" class="title"><?php print $item['title']; ?></a>
                </div>
            <?php }
        } ?>
    </div>
</div>