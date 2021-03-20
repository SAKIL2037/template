<?php

/*

type: layout

name: Default Blog Posts

description: Default

*/
?>

<div class="posts-last-list">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="col-xs-12 col-sm-12 col-md-6 post-single" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                    <div class="post-thumb">
                        <a href="<?php print $item['link'] ?>" itemprop="url" class="image" style="background-image: url('<?php print thumbnail($item['image'], 400); ?>');"></a>
                    </div>
                <?php endif; ?>
                <div class="post-info noelement">
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                        <h2><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>
                    <?php endif; ?>

                    <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                        <p class="description" itemprop="headline"><?php print $item['description'] ?></p>
                    <?php endif; ?>

                    <?php if (!isset($show_fields) or $show_fields == false or in_array('read_more', $show_fields)): ?>
                        <a href="<?php print $item['link'] ?>" itemprop="url" class="read-more">Read more</a>
                    <?php endif; ?>

                    <div class="meta-data">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('created_at', $show_fields)): ?>
                            <span><i class="fa fa-calendar"></i> <?php print date('M d, Y', strtotime($item['created_at'])) ?></span>
                        <?php endif; ?>

                        <?php if (function_exists('get_comments')) { ?>
                            <span><i class="fa fa-comment-o"></i> <?php print get_comments('count=1&content_id=' . $item['id']) ?> comments</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
