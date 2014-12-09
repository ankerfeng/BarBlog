<?php
/**
 * BarBlog
 * 
 * @package Barblog 
 * @author  麋鹿迷路的迷
 * @version 1.0
 * @link http://www.bkwy.org/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<!--内容全局div-->
<div class="col-md-10 col-md-offset-1">
    <div class="col-md-6">
    <br/>
        <ul class="list-group">
	    <?php while($this->next()): ?>
            <li class="list-group-item">
                <?php $this->date('F j, Y'); ?> ~ <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		    </li>
        <?php endwhile; ?>
        </ul>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <!--在手机上禁用-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
</div>
<div class="row col-md-6 text-right">
 <!--修改组件源码/typecho/var/Widget/Archive.php/1420与1421页，支持bootstrap分页组件-->
    <?php $this->pageNav(); ?>
</div>
<div class="col-md-10 col-md-offset-1">
<?php $this->need('footer.php'); ?>
