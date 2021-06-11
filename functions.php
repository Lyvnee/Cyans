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

    $isExcerpt = new Typecho_Widget_Helper_Form_Element_Radio('isExcerpt',
        array('0' => _t('Typecho默认'),
              '1' => _t('文本截取')),
              '1', _t('文章列表文章摘要内容'), _t('Typecho 默认方式根据&lt;!--more--&gt;标签截取内容，文本截取则仅截取设定长度的纯文本内容。自定义文章摘要不受文本截取长度限制！'));
    $form->addInput($isExcerpt);

    $excerptLength = new Typecho_Widget_Helper_Form_Element_Text('excerptLength', NULL, '200', _t('文章摘要截取长度'), _t('仅在摘要内容选择文本截取和非自定义文章摘要时起作用。'));
    $form->addInput($excerptLength);

    $showDisqus = new Typecho_Widget_Helper_Form_Element_Radio('showDisqus',
    array('0' => _t('使用原生评论系统'),
          '1' => _t('使用Disqus评论系统')),
          '1', _t('评论系统选择'), _t('默认使用Disqus评论系统,请在下面设置你的Disqus Website Shortname。'));
    $form->addInput($showDisqus);

    $shortName = new Typecho_Widget_Helper_Form_Element_Text('shortName', NULL, NULL, _t('Disqus评论系统设置'), _t('在这里填入你的Disqus Website Shortname，例如myblog。'));
    $form->addInput($shortName);
    
    $hideCategories = new Typecho_Widget_Helper_Form_Element_Text('hideCategories', NULL, NULL, _t('导航栏隐藏分类设置'), _t('在这里填入你要在导航栏隐藏的分类的分类缩略名{slug} ，例如tech。隐藏多个分类请使用英文逗号(,)分隔,例如tech,life,dream'));
    $form->addInput($hideCategories);

    $hidePages = new Typecho_Widget_Helper_Form_Element_Text('hidePages', NULL, NULL, _t('导航栏隐藏独立页面设置'), _t('在这里填入你要在导航栏隐藏的独立页面的页面缩略名{slug} ，例如about。隐藏多个页面请使用英文逗号(,)分隔,例如about,links,guestbook'));
    $form->addInput($hidePages);
    
    $addLicenses = new Typecho_Widget_Helper_Form_Element_Textarea('addLicenses', NULL,_t('本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可。'), _t('默认文章许可设置'), _t('在这里你可以设置文章的默认许可协议,用来显示在文章尾部。若需要临时使用其他协议，只需在撰写文章界面自定义字段处设置即可！'));
    $form->addInput($addLicenses);
    
    $topbarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('topbarBlock', 
    array('ShowAdmin' => _t('显示登录入口'),
          'ShowTopAd' => _t('显示顶栏公告')),
    array('ShowAdmin', 'ShowTopAd'), _t('顶栏显示'),_t('同时不选可隐藏顶栏'));
    $form->addInput($topbarBlock->multiMode());

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowSocialLinks' => _t('显示社交信息'),
        'ShowRecentPosts' => _t('显示最新文章'),
        'ShowRecentComments' => _t('显示最近回复'),
        'ShowCategory' => _t('显示文章分类'),
        'ShowArchive' => _t('显示按月归档'),
        'ShowTagCloud' => _t('显示标签云'),
        'ShowLinks' => _t('显示友情链接')),
    array('ShowSocialLinks', 'ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowTagCloud', 'ShowLinks'), _t('侧边栏显示'));
    
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


function themeFields($layout) {
    $customAbstract = new Typecho_Widget_Helper_Form_Element_Textarea('customAbstract', NULL, NULL, _t('自定义文章摘要'), _t('在这里你可以自定义文章摘要,用来显示在首页。'));
    $customAbstract->input->setAttribute('style', 'width:100%');
    $layout->addItem($customAbstract);
    
    $customLicenses = new Typecho_Widget_Helper_Form_Element_Textarea('customLicenses', NULL,NULL, _t('自定义文章许可'), _t('在这里你可以自定义文章许可,用来显示在文章尾部。<br/>例如：本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可。<br/>或者本作品转载于XX网站，作者XXX。'));
    $customLicenses->input->setAttribute('style', 'width:100%');
    $layout->addItem($customLicenses);
}

