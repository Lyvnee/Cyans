<?php
/**
 * 一款简洁自适应布局的Typecho模板
 * 
 * @package Ching Theme
 * @author Lyvnee
 * @version 0.9.2
 * @license MIT
 * @link http://lyvnee.com
 **/

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="" id="main" role="main">
    <div class="crumbs_patch">
    	<a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a> &raquo;</li>
    	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
    		<?php _e('最新文章'); ?>
    	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
    		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
    	<?php else: ?><!-- 页面为其他页时 -->
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
				<span class="pl f_r"><a href="<?php $this->permalink(); ?>#disqus_thread"  data-disqus-identifier="<?php $this->cid(); ?>"></a></span>
			</ul>
            <div class="post-content">
				<p><?php $this->excerpt(250, '...'); ?></p>
            </div>
			<ul class="post-more">
				<li><span class="tag"><?php $this->tags(' , ', true, '无标签'); ?></span></li>
				<a class="readmore f_r" href="<?php $this->permalink() ?>"><?php _e('阅读全文 &raquo;'); ?></a>
			</ul>
        </div>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>



