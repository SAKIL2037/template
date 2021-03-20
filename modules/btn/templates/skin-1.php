<?php

/*

type: layout

name: Contacts Page Button

description: Skin 1

*/
?>
<script>
    mw.require('tools.js', true);
    mw.require('ui.css', true);
</script>

<a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
    print ' target="_blank" ';
} ?> class="btn btn-primary btn-block">
    <?php if ($icon): ?>
        <span class="<?php print $icon; ?>"></span>
    <?php endif; ?>
    <?php print $text; ?>
</a>