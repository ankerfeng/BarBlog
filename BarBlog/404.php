<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-md-10 col-md-offset-1">
        
        <div class="jumbotron text-center">
            <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('<h1>你想查看的页面已被转移或删除了, 要不要搜索看看: </h1>'); ?></p>
            <form class="navbar-form navbar-center" id="search" method="post" action="./" role="search">
                <div class="form-group">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>">
                </div>
                <button type="submit" class="btn btn-default"><?php _e('搜索'); ?></button>
            </form>
        <!--我不是前端狗-->
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>

    </div><!-- end #content-->
    <div class="col-md-10 col-md-offset-1">

	<?php $this->need('footer.php'); ?>
