<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->options->subSite): ?><?php $this->options->subSite(); ?><?php endif; ?>
    </title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('prism/prism.css'); ?>">
    <?php $this->header(); ?>
    <?php if ($this->options->tongjiCode): ?><?php $this->options->tongjiCode(); ?><?php endif; ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="header">
<?php if (!empty($this->options->topbarBlock)): ?>
    <div id="topbar">
        <div class="inner">
                <?php if (!empty($this->options->topbarBlock) && in_array('ShowTopAd', $this->options->topbarBlock)): ?>
                    <?php if ($this->options->topAd): ?>
                    <img src="<?php $this->options->themeUrl('img/notice.png'); ?>" alt="公告：" /><a><?php $this->options->topAd(); ?></a>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (!empty($this->options->topbarBlock) && in_array('ShowAdmin', $this->options->topbarBlock)): ?>
                    <?php if($this->user->hasLogin()): ?>
                    <a class="f_r" href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
                    <a class="f_r" href="<?php $this->options->logoutUrl(); ?>"><?php _e('安全退出 &nbsp;&nbsp;'); ?></a></li>
                    <?php else: ?>
                    <a class="f_r" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('安全登录'); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
        </div>
</div><?php endif; ?>
<div id="nav">
        <div class="site-name">
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php if ($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            <?php else: ?>
            <?php $this->options->title() ?>
            <?php endif; ?>
        </a>
	    <p class="description"><?php $this->options->description() ?></p>
        </div>
        <div class="site-search">
            <form id="search" method="post" action="./" role="search">
                <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </form>          
        </div>
</div>
<div id="menu">
        <div class="inner">
            <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?>
            <?php if (!in_array($category->slug, explode(',',$this->options->hideCategories))): ?>
            <a<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            	<?php if (!in_array($pages->slug, explode(',',$this->options->hidePages))): ?>
          		<a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
		    <?php endif; ?> 
            <?php endwhile; ?>
        </div>
</div>
</div>
<div id="body">
    <div class="container">
