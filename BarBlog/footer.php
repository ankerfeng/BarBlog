
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="panel panel-default col-md-12">
 <div class="panel-body text-right">
    &copy; <?php echo date('Y'); ?>
    <span class="glyphicon glyphicon-cloud"></span>
    <a href="<?php $this->options->siteUrl(); ?>">
        <?php $this->options->title(); ?>
    </a>.
    <span class="glyphicon glyphicon-glass"></span>
    <?php _e('Typecho'); ?>.
    </div>
</div>
<?php $this->footer(); ?>
</div>
</body>
</html>
