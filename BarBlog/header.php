<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
        )); ?>
    </title>

    <!-- 使用url函数转换相关路径 -->
    <script type="text/javascript" src="<?php $this->options->themeUrl('/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('/js/bootstrap.min.js'); ?>"></script>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <?php $this->header(); ?>
</head>

<body>
<!--导航条div-->
<div class="col-md-10 col-md-offset-1 navfix">
<!-- 导航条 -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php $this->options->siteUrl(); ?>">
                <span class="glyphicon glyphicon-cloud"></span>
                <?php if ($this->options->logoUrl): ?>
                    <img  src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" class="img-circle"/>
                <?php endif; ?>
                <?php $this->options->title() ?>
            </a>
        </li>
        <!--分类--> 
        <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>        
    </ul>
    <!--搜索页面-->
    <form class="navbar-form navbar-left" id="search" method="post" action="./" role="search" >
        <div class="form-group">
            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
            <input type="text" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>">
        </div>
        <button type="submit" class="btn btn-default"><?php _e('搜索'); ?></button>
    </form>
    <!--签名与个人信息--> 
    <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><?php $this->options->description() ?></p>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                关于我
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="http://weibo.com/2383324885/profile?rightmod=1&wvr=6&mod=personinfo" target="_blank">微博</a></li>
                <li><a href="https://github.com/imfenghui" target="_blank">GitHub</a></li>
                <li><a href="http://www.zhihu.com/people/bkwy" target="_blank">知乎</a></li>
                <li><a target="_blank" href="http://mp.weixin.qq.com/s?__biz=MjM5MjQ4OTgwOQ==&mid=201266282&idx=1&sn=698b0590b4a606b0e6434b8dc7554c01#rd">微信公众号</a></li>
                <li class="divider"></li>
                <!--利用独立页面-->
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                    <li>
                    <a
                        <?php if($this->is('page', $pages->slug)): ?> 
                            class="current"<?php endif; ?> 
                        href="<?php $pages->permalink(); ?>" 
                        title="<?php $pages->title(); ?>" >
                        <?php $pages->title(); ?>
                    </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<br/><br/><br/><br/>


    
    
