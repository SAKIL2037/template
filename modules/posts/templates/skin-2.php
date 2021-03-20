<?php

/*

type: layout

name: Footer Posts

description: Skin 2

*/
?>

<div class="row posts">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="col-xs-12" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                    <div class="post-info noelement">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <h4><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h4>
                        <?php endif; ?>

                        <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                            <p class="description" itemprop="headline"><?php print $item['description'] ?></p>
                        <?php endif; ?>
                    </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>