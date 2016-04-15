<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div>
    <div id="totop" class="totop"></div>
</div><!-- end #body -->

<div id="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>. <<?php timer_stop($this); ?>s> <?php if ($this->options->tongjiCode): ?><?php $this->options->tongjiCode(); ?><?php endif; ?>

</div><!-- end #footer -->

<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/ching.js'); ?>"></script>

<?php $this->footer(); ?>
</body>
</html>
