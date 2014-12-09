<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-md-10 col-md-offset-1">
    <div class="col-md-10 col-md-offset-1">
        <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    <div class="col-md-8">
    <?php $this->need('comments.php'); ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>
