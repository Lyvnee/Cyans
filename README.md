## Cyans Theme for Typecho

### 简介

Cyans 是一款简洁的响应式Typecho主题。

![Cyans预览图](./screenshot.png)

主题演示地址：[LYVNEE'S BLOG][3]

### 说明

- 主题默认使用 [Disqus][1] 评论系统，同时也提供Typecho原生评论系统，请按下列说明进行设置。
- 主题的侧栏友链使用了[Hanny][2]的友链插件(Links)，请按下列说明上传并安装。
- 主题支持自定义摘要、文章许可协议以及丰富的后台外观设置功能。

### 安装

##### 主题安装

- 下载此分支文件重命名为`Cyans`，上传至站点`/usr/themes/`，通过`控制台`->`外观`启用主题，在`设置外观`中做相关设置。

##### 插件安装

- 下载 [typecho-plugin-store][4] 仓库中的 `Links` 插件，上传至站点`/usr/plugins/`，通过`控制台`->`插件`启用插件，在后台`管理->友情链接`添加友链。

##### 评论系统安装

- 主题默认使用Disqus评论系统，同时也提供Typecho原生评论系统，可在后台`控制台`->`外观`->`设置外观`->`评论系统选择`中选择原生评论系统。

- 使用默认设置请注册[Disqus][1] 并创建自己的 `Disqus Website Shortname`。

- 在后台`控制台`->`外观`->`设置外观`->`Disqus评论系统设置`中按说明填写自己的`Disqus Website Shortname`即可，`comments.php`中相关代码已经设置好**请勿随意修改**。

### 功能

##### 撰写文章界面

- 代码高亮，在使用Markdown写文章时，只要在代码块标记` ``` `后面添加你的代码的语言名，如php、html、python等，就可以实现代码高亮展示。

- 自定义文章摘要，代替Typecho默认的根据<!--more-->标签截取和模板默认使用的文本截取输出摘要。

- 自定义文章许可，临时修改在后台设置好的默认许可协议。

##### 设置外观

- 站点LOGO地址设置

填入一个图片URL地址, 作为网站LOGO，留空则直接显示站点文字标题

- 站点副标题

填入一段文字，作为站点副标题和主标题一起显示在浏览器标题栏

- 新浪微博

填入你的新浪微博地址，显示在侧边栏

- GitHub

填入你的GitHub地址，显示在侧边栏

- ICP备案号

填入你的ICP备案号，显示在页脚

- 顶栏公告

填入一段文字，作为欢迎语或者公告显示在顶栏

- 站点统计

填入你的站点统计代码，例如百度统计。

- 文章列表文章摘要内容

- [ ] Typecho默认  
- [x] 文本截取

Typecho 默认方式根据<!--more-->标签截取内容，文本截取则仅截取设定长度的纯文本内容。自定义文章摘要不受文本截取长度限制！

- 文章摘要截取长度

仅在摘要内容选择文本截取和非自定义文章摘要时起作用。

- 评论系统选择

- [ ] 使用原生评论系统
- [x] 使用Disqus评论系统

默认使用Disqus评论系统,请在下面设置你的Disqus Website Shortname。

- Disqus评论系统设置

在这里填入你的Disqus Website Shortname，例如myblog。

- 导航栏隐藏分类设置

在这里填入你要在导航栏隐藏的分类的分类缩略名{slug} ，例如tech。隐藏多个分类请使用英文逗号(,)分隔,例如tech,life,dream

- 导航栏隐藏独立页面设置

在这里填入你要在导航栏隐藏的独立页面的页面缩略名{slug} ，例如about。隐藏多个页面请使用英文逗号(,)分隔,例如about,links,guestbook

- 默认文章许可设置

在这里你可以设置文章的默认许可协议,用来显示在文章尾部。若需要临时使用其他协议，只需在撰写文章界面自定义字段处设置即可！

- 顶栏显示

- [x] 显示登录入口
- [x] 显示顶栏公告

同时不选可隐藏顶栏

- 侧边栏显示

- [x] 显示社交信息
- [x] 显示最新文章
- [x] 显示最近回复
- [x] 显示文章分类
- [x] 显示按月归档
- [x] 显示标签云
- [x] 显示友情链接

### 许可

MIT License

[1]: https://disqus.com/
[2]: http://www.imhan.com
[3]: https://lyvnee.com/
[4]: https://github.com/Lyvnee/typecho-plugin-store
