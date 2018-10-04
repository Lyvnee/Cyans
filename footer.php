<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div>
    <div id="totop" class="totop"></div>
</div>

<div id="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>&nbsp;|&nbsp;<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>&nbsp;|&nbsp;<?php $this->options->showICP(); ?>&nbsp;<<?php timer_stop($this); ?>s> 
</div>

<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/ching.js'); ?>"></script>

<?php $this->footer(); ?>

<?php if ($this->options->showDisqus): ?>
	<?php if ($this->options->shortName): ?>
	    <script id="dsq-count-scr" src="//<?php $this->options->shortName() ?>.disqus.com/count.js" async></script>
	<?php else: ?>
	    <?php _e('<!-- 你的Disqus Website Shortname没有设置，请在后台设置。 -->') ?>
	<?php endif; ?>
<?php endif; ?>

</body>
</html>
