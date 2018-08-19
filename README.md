## Ching

### 简介

Ching 是一款简洁的响应式Typecho主题。

### 说明

- 主题默认使用 [Disqus][1] 评论系统，请按下列说明上传并安装。
- 主题的侧栏友链使用了[Hanny][2]的友链插件(Links)，请按下列说明上传并安装。

### 安装

##### 主题安装

- 下载此分支文件重命名为`Ching`，上传至站点`/usr/themes/`，通过`控制台->外观`启用主题，在`设置外观`中做相关设置。

##### 插件安装

- 按照`plugins`分支中的说明，自行安装相关插件。

##### 评论系统安装

- 请注册并使用通用代码（Universal Code ）安装 Disqus。

- 请将`comments.php`文件中的`s.src = 'https://<YOUR Disqus Website Shortname>.disqus.com/embed.js' ` 中的`<YOUR Disqus Website Shortname>`替换为自己的 Disqus Website Shortname，其他地方已设置好**请勿修改**。

- 请将`footer.php`文件中的`src="//<YOUR Disqus Website Shortname>.disqus.com/count.js" ` 中的`<YOUR Disqus Website Shortname>`替换为自己的 Disqus Website Shortname。

### 许可

MIT License

[1]: https://disqus.com/
[2]: http://www.imhan.com

