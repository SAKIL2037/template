<?php

/*

type: layout

name: Default

description: Default Picture List

*/

?>
<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>
    <script>mw.require("tools.js", true); </script>
    <div class="mw-module-images<?php if ($no_img) { ?> no-image<?php } ?>">
        <div class="mw-pictures-gallery" id="mw-gallery-<?php print $rand; ?>">
            <?php foreach ($data as $key => $item): ?>
                <?php if ($key == 1) {
                    $classHelper = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
                } else {
                    $classHelper = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
                }
                ?>
                <div class="<?php print $classHelper ?> mw-pictures-item mw-pictures-item-<?php print $item['id']; ?>">
                    <a href="<?php print ($item['filename']); ?>"
                       onclick="mw.gallery(gallery<?php print $rand; ?>, <?php print $key; ?>);return false;"
                       style="background-image: url('<?php print thumbnail($item['filename'], 600); ?>');">
                        <span><?php print $item['title']; ?></span>
                    </a>
                </div>
            <?php endforeach; ?>

            <script>
                gallery<?php print $rand; ?> = [
                        <?php foreach($data  as $item): ?>{image: "<?php print ($item['filename']); ?>", description: "<?php print $item['title']; ?>"},
                    <?php endforeach;  ?>
                ];
            </script>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>