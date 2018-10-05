<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main">
        <div class="post">
            <h2 class="post-title"> <?php $this->title() ?> </h2>
            <ul class="post-meta">
                <li><span class="time"><?php $this->date('Y-m-j'); ?></span></li>
                <li><span class="fl"><?php $this->category(','); ?></span></li>
		<li><span class="view"><?php $this->views(); ?> 次浏览</span></li>
                <li><?php if ($this->options->showDisqus): ?>
                    <span class="disqus-comment-count pl" data-disqus-identifier="<?php $this->cid(); ?>"></span>
                    <?php else: ?>
                    <span class="pl"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></span>
                    <?php endif; ?></li>
            </ul>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        <div id="banquan">
                <div class="xinxi">
                <span class="zuozhe">本文作者：</span><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="biaoti2">文章标题：</span> <a href="<?php $this->title() ?>"><?php $this->title() ?></a><br>
                 <span class="blog_url">本文地址：</span><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->permalink() ?></a><br>
                <b>版权声明：</b>若无特别注明，本文皆为“<a class="blog_name" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->description() ?>"><?php $this->options->title() ?></a>”原创，转载请保留文章出处。
                </div>
        </div>
        <ul class="post-more">
            <li><span class="tag"><?php $this->tags(' , ', true, '无标签'); ?></span></li>
        </ul>
    </div>
    
    <ul class="post-near">
        <li class="f_l"><?php _e('<em>上一篇</em> ：') ?><?php $this->thePrev('%s','没有了'); ?></li>
        <li class="f_r"><?php _e('<em>下一篇</em> ：' ) ?><?php $this->theNext('%s','没有了'); ?></li>
    </ul>
   
    <?php $this->need('comments.php'); ?>

</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
