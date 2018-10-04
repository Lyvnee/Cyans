<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if ($this->options->showDisqus): ?>
<div id="comments">
    <?php if($this->allow('comment')): ?>
<div id="disqus_thread"></div>
<script>
var disqus_config = function () {
this.page.url = '<?php $this->permalink(); ?>';
this.page.identifier = '<?php $this->cid(); ?>';
};
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
<?php if ($this->options->shortName): ?>
s.src = 'https://<?php $this->options->shortName() ?>.disqus.com/embed.js';
<?php else: ?>
    <?php _e('<!-- 你的Disqus Website Shortname没有设置，请在后台设置。 -->') ?>
<?php endif; ?>
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>                                
<?php else: ?>
<h4><?php _e("抱歉，评论已关闭！"); ?></h4> 
<?php endif; ?> 
</div>
<?php else: ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('发表新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('当前登陆用户: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
                <label for="author" class="required"><?php _e('称呼：'); ?></label>
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('邮箱：'); ?></label>
    			<input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站：'); ?></label>
    			<input type="url" name="url" id="url" class="text" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <label for="textarea" class="required"><?php _e('评论内容：'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h4><?php _e("抱歉，评论已关闭！"); ?></h4> 
    <?php endif; ?>
</div>
<?php endif; ?> 