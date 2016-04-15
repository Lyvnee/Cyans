<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="" id="main">
    <div class="post">
        <h1 class="post-title"><?php $this->title() ?></h1>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
    </div>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
