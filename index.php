<?php
/**
 * 一款简洁自适应布局的Typecho模板
 * 
 * @package Cyans Theme
 * @author Lyvnee
 * @version 1.0.0
 * @license MIT
 * @link https://lyvnee.com
 **/

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="" id="main" role="main">
    <div class="crumbs_patch">
    	<a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a> &raquo;</li>
    	<?php if ($this->is('index')): ?>
    		<?php _e('最新文章'); ?>
    	<?php elseif ($this->is('post')): ?>
    		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
    	<?php else: ?>
    		<?php $this->archiveTitle(array(
                'category'  =>  _t('分类 <i>%s</i> 下的文章'),
                'search'    =>  _t('包含关键字 <i>%s</i> 的文章'),
                'tag'       =>  _t('标签 <i>%s</i> 下的文章'),
                'author'    =>  _t('<i>%s</i> 发布的文章')
            ), '',''); ?>
    	<?php endif; ?>
    </div>
	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="post-titles"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li><span class="time"><?php $this->date('Y-m-j'); ?></span></li>
				<li><span class="fl"><?php $this->category(','); ?></span></li>
				<li><span class="view"><?php get_post_view($this) ?> 次浏览</span></li>
				<span class="pl f_r"><?php if ($this->options->showDisqus): ?><a href="<?php $this->permalink(); ?>#disqus_thread"  data-disqus-identifier="<?php $this->cid(); ?>"></a><?php else: ?><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a><?php endif; ?></span>
			</ul>
            <div class="post-content">
                    <?php if($this->fields->customAbstract): ?>
                        <?php $this->fields->customAbstract(); ?>
                    <?php elseif($this->options->isExcerpt): ?>
                        <?php $this->excerpt($this->options->excerptLength,'...'); ?>
                    <?php else: ?>
                        <?php $this->content(); ?>
                    <?php endif; ?>
            </div>
			<ul class="post-more">
				<li><span class="tag"><?php $this->tags(' , ', true, '无标签'); ?></span></li>
				<a class="readmore f_r" href="<?php $this->permalink() ?>"><?php _e('阅读全文 &raquo;'); ?></a>
			</ul>
        </div>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>



