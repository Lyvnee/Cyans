<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
s.src = '你的链接';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>                                
<?php else: ?>
	<h4><?php _e("抱歉，评论已关闭！"); ?></h4> 
<?php endif; ?> 
</div>