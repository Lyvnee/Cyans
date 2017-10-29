<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="" id="secondary">
    <div class="widget">
        <div class="fork">
            <ul>
                <?php if ($this->options->weiboUrl): ?>
                <li><a rel="nofollow" class="xlwb" href="<?php $this->options->weiboUrl(); ?>" target="_blank"><?php _e('新浪微博'); ?></a></li>
                <?php endif; ?>
                <?php if ($this->options->gitUrl): ?>
                <li><a rel="nofollow" class="txwb" href="<?php $this->options->gitUrl(); ?>" target="_blank"><?php _e('GitHub'); ?></a></li>
                <?php endif; ?>
                <li><a class="rss" href="<?php $this->options->feedUrl(); ?>" target="_blank"><?php _e('RSS'); ?></a></li>
                <li><a rel="nofollow" class="wx" href="mailto:<?php $this->author->mail(); ?>"><?php _e('邮箱'); ?></a></li>
            </ul>
        </div>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <div class="widget">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <div class="widget">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(35, '...'); ?></a></li>
        <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <div class="widget">
		<h3 class="widget-title"><?php _e('文章分类'); ?></h3>
      <ul class="widget-list widget-right">
        <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
      </ul>
	</div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <div class="widget">
		<h3 class="widget-title"><?php _e('按月归档'); ?></h3>
        <ul class="widget-list widget-right">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=M Y')
            ->parse('<li><a href="{permalink}">{date}</a> ({count})</li>'); ?>
        </ul>
	</div>
    <?php endif; ?>
 
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTagCloud', $this->options->sidebarBlock)): ?>
    <div class="widget">
		<h3 class="widget-title"><?php _e('标签云'); ?></h3>
    <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=45')->to($tags); ?>
    <ul class="tags-list">
    <?php while($tags->next()): ?>
    <li><a style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
    <?php endwhile; ?>
    </ul>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowLinks', $this->options->sidebarBlock)): ?>
    <div class="widget">
		<h3 class="widget-title"><?php _e('友情链接'); ?></h3>
        <ul class="widget-list widget-right">
            <?php Links_Plugin::output("SHOW_TEXT", 10); ?>
        </ul>
	</div>
    <?php endif; ?>

</div><!-- end #sidebar -->