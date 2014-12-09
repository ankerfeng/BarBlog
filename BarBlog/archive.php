<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="row col-md-10 col-md-offset-1">
        <h3>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('<span class="glyphicon glyphicon-list"></span> %s'),
            'search'    =>  _t('<span class="glyphicon glyphicon-search"></span> %s '),
            'tag'       =>  _t('<span class="glyphicon glyphicon-tags"></span> %s ')
        ), '', ''); ?>
        </h3>
        <div class="col-md-6">
        <br/>
        <ul class="list-group">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
    			<li class="list-group-item">
                    <span>
                        <time datetime="<?php $this->date('c'); ?>">
                            <?php $this->date('F j, Y'); ?>
                        </time>
                    </span>
                    <span>
                    <a href="<?php $this->permalink() ?>">
                        <?php $this->title() ?>
                    </a>
                    </span>
                    <span>
                        <a href="<?php $this->permalink() ?>#comments">
                            <?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?>
                        </a>
                    </span>
                </li>
    	<?php endwhile; ?>
        <?php endif; ?>
        </ul>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <!--在手机上禁用-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php $this->need('sidebar.php'); ?>
            </div>
        </div>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<div class="col-md-10 col-md-offset-1">
	<?php $this->need('footer.php'); ?>
