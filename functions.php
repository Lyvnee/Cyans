<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 作为网站LOGO'));
    $form->addInput($logoUrl);

    $subSite = new Typecho_Widget_Helper_Form_Element_Text('subSite', NULL, NULL, _t('站点副标题'), _t('在这里填入一段文字，作为站点副标题和主标题一起显示在浏览器标题栏'));
    $form->addInput($subSite);
    
    $weiboUrl = new Typecho_Widget_Helper_Form_Element_Text('weiboUrl', NULL, 'http://weibo.com/', _t('新浪微博'), _t('在这里填入一个新浪微博地址'));
    $form->addInput($weiboUrl);

    $gitUrl = new Typecho_Widget_Helper_Form_Element_Text('gitUrl', NULL, 'http://github.com/', _t('GitHub'), _t('在这里填入一个GitHub地址'));
    $form->addInput($gitUrl);

    $showICP = new Typecho_Widget_Helper_Form_Element_Text('showICP', NULL, NULL, _t('ICP备案号'), _t('在这里填入你的ICP备案号'));
    $form->addInput($showICP);

    $topAd = new Typecho_Widget_Helper_Form_Element_Text('topAd', NULL, '欢迎光临我的博客！', _t('顶栏公告'), _t('在这里填入一段文字，作为欢迎语或者公告显示在顶栏'));
    $form->addInput($topAd);

    $tongjiCode = new Typecho_Widget_Helper_Form_Element_Textarea('tongjiCode', NULL, NULL, _t('站点统计'), _t('在这里填入站点统计代码，例如百度统计。'));
    $form->addInput($tongjiCode);

    $showDisqus = new Typecho_Widget_Helper_Form_Element_Radio('showDisqus',
    array('0' => _t('使用原生评论系统'),
          '1' => _t('使用Disqus评论系统')),
          '1', _t('评论系统选择'), _t('默认使用Disqus评论系统,请在下面设置你的Disqus Website Shortname。'));
    $form->addInput($showDisqus);

    $shortName = new Typecho_Widget_Helper_Form_Element_Text('shortName', NULL, NULL, _t('Disqus评论系统设置'), _t('在这里填入你的Disqus Website Shortname，例如myblog。'));
    $form->addInput($shortName);

    $topbarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('topbarBlock', 
    array('ShowAdmin' => _t('显示登录入口'),
          'ShowTopAd' => _t('显示顶栏公告')),
    array('ShowAdmin', 'ShowTopAd'), _t('顶栏显示'),_t('同时不选可隐藏顶栏'));
    $form->addInput($topbarBlock->multiMode());

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
        'ShowRecentComments' => _t('显示最近回复'),
        'ShowCategory' => _t('显示文章分类'),
        'ShowArchive' => _t('显示按月归档'),
        'ShowTagCloud' => _t('显示标签云'),
        'ShowLinks' => _t('显示友情链接')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowTagCloud', 'ShowLinks'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

function timer_start() {
    global $timestart;
    $mtime = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();
 
function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime = explode( ' ', microtime() );
    $timeend = $mtime[1] + $mtime[0];
    $timetotal = $timeend - $timestart;
    $r = number_format( $timetotal, $precision );
    if ( $display )
        echo $r;
    return $r;
}

