<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div>
    <div id="totop" class="totop"></div>
</div>

<div id="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<?php $this->options->showICP(); ?> <<?php timer_stop($this); ?>s> 
</div>

<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/ching.js'); ?>"></script>

<?php $this->footer(); ?>

<script id="dsq-count-scr" src="//<YOUR Disqus Website Shortname>.disqus.com/count.js" async></script>

</body>

</html>
