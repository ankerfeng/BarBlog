<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-10 col-md-offset-1">
        <h3>
            <a href="<?php $this->permalink() ?>">
            <?php $this->title() ?>
            </a>
        </h3>
        <h4>
            <span>
                <time datetime="<?php $this->date('c'); ?>">
                    <?php $this->date('F j, Y'); ?>
                </time>
            </span>
            <span><?php _e('分类: '); ?><?php $this->category(','); ?></span>
        </h4>
        <hr/>
            <?php $this->content(); ?>
            <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
        </div>
        
    <div class="col-md-10 col-md-offset-1">
        <div class="row col-md-8">
        <?php $this->need('comments.php'); ?>
        <ul>
            <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
            <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
        </ul>

        </div>
        </div>
</div><!-- end #main-->
<div class="col-md-10 col-md-offset-1">
<?php $this->need('footer.php'); ?>
