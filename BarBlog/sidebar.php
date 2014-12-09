<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section>
        <h3><?php _e('最新文章'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    

    <?php if (!empty($this->options->sidebarBlock) 
        && in_array('ShowRecentComments', $this->options->sidebarBlock)):?>
        <section class="widget">
            <h3><?php _e('最近回复'); ?></h3>
            <ul>
            <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>
                :<?php $comments->excerpt(35, '...'); ?>
                </li>
            <?php endwhile; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) 
        && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <section>
            <h3><?php _e('分类'); ?></h3>
            <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
        </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock)&&in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section>
        <h3><?php _e('归档'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <section>
        <h3><?php _e('RSS订阅'); ?></h3>
        <ul>

<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    
                    <?php endwhile; ?>
          


            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
        </ul>
    </section>
    <?php endif; ?>
<!--添加友情链接 -->
    <section>
        <h3><?php _e('友情链接'); ?></h3>
        <ul>
           <li><a href="http://az0ne.lofter.com/" target="_blank">AZONE博客</a></li>
           <li><a href="http://www.hellofanfan.com/?p=177" target="_blank">hellofanfan</a></li>
           <li><a href="http://navisec.it/" target="_blank">纳威导航</a><br/></li>
        </ul>
    </section>

</div><!-- end #sidebar -->
