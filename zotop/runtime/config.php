<?php
return array (
  'zotop' => false,
  'database' => 
  array (
    'default' => 
    array (
      'driver' => 'mysql',
      'hostname' => 'localhost',
      'hostport' => '3306',
      'username' => 'root',
      'password' => '123456',
      'database' => 'zotop',
      'prefix' => 'zotop_',
      'pconnect' => '0',
    ),
  ),
  'app' => 
  array (
    'system' => 
    array (
      'id' => 'system',
      'name' => '系统',
      'description' => '系统应用，实现系统核心功能',
      'type' => 'core',
      'version' => '2.3',
      'dir' => 'system',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'zotop.chenlei',
      'email' => 'zotop.chenlei@gmail.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682304',
      'updatetime' => '1416682304',
      'listorder' => '0',
      'status' => '1',
    ),
    'content' => 
    array (
      'id' => 'content',
      'name' => '内容',
      'description' => '站点内容管理、内置新闻、页面、图库等内容模型',
      'type' => 'module',
      'version' => '2.0',
      'dir' => 'content',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'zotop.chenlei',
      'email' => 'zotop.chenlei@gmail.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682306',
      'updatetime' => '1416682306',
      'listorder' => '1',
      'status' => '1',
    ),
    'block' => 
    array (
      'id' => 'block',
      'name' => '区块',
      'description' => '网站内容区块碎片化管理和维护',
      'type' => 'module',
      'version' => '2.3',
      'dir' => 'block',
      'tables' => 'block,block_category,block_datalist',
      'dependencies' => '',
      'author' => 'zotop.chenlei',
      'email' => 'zotop.chenlei@gmail.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682308',
      'updatetime' => '1416682308',
      'listorder' => '2',
      'status' => '1',
    ),
    'guestbook' => 
    array (
      'id' => 'guestbook',
      'name' => '留言本',
      'description' => '网站留言，拥有留言、回复等功能',
      'type' => 'module',
      'version' => '2.0',
      'dir' => 'guestbook',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'zotop.chenlei',
      'email' => 'zotop.chenlei@gmail.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682309',
      'updatetime' => '1416682309',
      'listorder' => '3',
      'status' => '1',
    ),
    'ueditor' => 
    array (
      'id' => 'ueditor',
      'name' => 'UEditor 1.4.3',
      'description' => 'UEditor是由百度web前端研发部开发所见即所得富文本web编辑器，具有轻量，可定制，注重用户体验等特点，开源基于BSD协议，允许自由使用和修改代码...,详细请访问Ueditor官方网站：http://ueditor.baidu.com',
      'type' => 'plugin',
      'version' => '1.7',
      'dir' => 'ueditor',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'hankx_chen',
      'email' => '',
      'homepage' => 'http://ueditor.baidu.com',
      'installtime' => '1416682310',
      'updatetime' => '1416682310',
      'listorder' => '4',
      'status' => '1',
    ),
    'area' => 
    array (
      'id' => 'area',
      'name' => '地区',
      'description' => '省、市、县三级城市数据，默认数据采用国标行政区划代码',
      'type' => 'module',
      'version' => '1.1',
      'dir' => 'area',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'zotop team',
      'email' => 'hankx_chen@qq.com',
      'homepage' => 'http://zotop.com',
      'installtime' => '1416682312',
      'updatetime' => '1416682312',
      'listorder' => '5',
      'status' => '1',
    ),
    'dbimport' => 
    array (
      'id' => 'dbimport',
      'name' => '数据导入',
      'description' => '导入旧版本数据',
      'type' => 'module',
      'version' => '1.0',
      'dir' => 'dbimport',
      'tables' => 'dbimport',
      'dependencies' => '',
      'author' => '',
      'email' => '',
      'homepage' => '',
      'installtime' => '1416682314',
      'updatetime' => '1416682314',
      'listorder' => '6',
      'status' => '1',
    ),
    'developer' => 
    array (
      'id' => 'developer',
      'name' => '开发助手',
      'description' => '应用开发助手，应用开发必备工具',
      'type' => 'module',
      'version' => '3.0',
      'dir' => 'developer',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'zotop.chenlei',
      'email' => 'zotop.chenlei@gmail.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682315',
      'updatetime' => '1416682315',
      'listorder' => '7',
      'status' => '1',
    ),
    'form' => 
    array (
      'id' => 'form',
      'name' => '自定义表单',
      'description' => '通过自定义表单可以自定义一些常用的功能，如：友情链接、简单的留言板、反馈等',
      'type' => 'module',
      'version' => '1.0',
      'dir' => 'form',
      'tables' => 'form,form_field',
      'dependencies' => '',
      'author' => 'zotop',
      'email' => 'deleloper@zotop.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682317',
      'updatetime' => '1416682317',
      'listorder' => '8',
      'status' => '1',
    ),
    'kefu' => 
    array (
      'id' => 'kefu',
      'name' => '在线客服',
      'description' => '支持QQ、阿里旺旺等帐号在线服务，帮助网站访问者更加方便快捷的与您取得联系',
      'type' => 'module',
      'version' => '1.8',
      'dir' => 'kefu',
      'tables' => 'kefu,kefu',
      'dependencies' => '',
      'author' => 'zotop team',
      'email' => '',
      'homepage' => '',
      'installtime' => '1416682318',
      'updatetime' => '1416682318',
      'listorder' => '9',
      'status' => '1',
    ),
    'member' => 
    array (
      'id' => 'member',
      'name' => '会员',
      'description' => '会员相关功能，允许会员注册，并且可以管理注册会员',
      'type' => 'module',
      'version' => '2.0',
      'dir' => 'member',
      'tables' => 'member',
      'dependencies' => '',
      'author' => 'zotop team',
      'email' => 'zotop.chenlei@gmail.com',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682319',
      'updatetime' => '1416682319',
      'listorder' => '10',
      'status' => '1',
    ),
    'sitemap' => 
    array (
      'id' => 'sitemap',
      'name' => '网站地图',
      'description' => '通知搜索引擎网站上哪些文件需要索引、这些文件的最后修订时间、更改频度、文件位置、相对优先索引权，建立索引范围和索引的行为习惯',
      'type' => 'module',
      'version' => '1.0',
      'dir' => 'sitemap',
      'tables' => '',
      'dependencies' => '',
      'author' => 'zotop team',
      'email' => '',
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682320',
      'updatetime' => '1416682320',
      'listorder' => '11',
      'status' => '1',
    ),
    'translator' => 
    array (
      'id' => 'translator',
      'name' => '别名翻译',
      'description' => '替换系统默认的别名转换方式，将别名翻译成英文',
      'type' => 'plugin',
      'version' => '1.3',
      'dir' => 'translator',
      'tables' => NULL,
      'dependencies' => NULL,
      'author' => 'zotop team',
      'email' => NULL,
      'homepage' => 'http://www.zotop.com',
      'installtime' => '1416682321',
      'updatetime' => '1416682321',
      'listorder' => '12',
      'status' => '1',
    ),
  ),
  'router' => false,
  'cookie' => 
  array (
    'expire' => 3600,
    'prefix' => 'zotop_',
    'path' => '/',
    'domain' => '',
  ),
  'session' => 
  array (
    'driver' => '',
    'expire' => 1440,
    'autostart' => true,
    'name' => 'sessionid',
    'path' => '',
    'cache_limiter' => 'private_no_expire',
    'cache_expire' => '30',
    'user_cookie' => true,
    'cookie_domain' => '',
    'cookie_path' => '',
    'cookie_expire' => '0',
  ),
  'system' => 
  array (
    'site_name' => '站点名称',
    'site_url' => '',
    'site_theme' => 'default',
    'site_title' => '',
    'site_keywords' => '',
    'site_description' => '',
    'site_closed' => '0',
    'site_closedreason' => '',
    'attachment_image_exts' => 'jpg,jpeg,gif,bmp,png',
    'attachment_image_size' => '20',
    'attachment_file_exts' => 'doc,docx,xls,xlsx,ppt,pptx,pps,pdf,txt,rar,zip',
    'attachment_file_size' => '20',
    'attachment_video_exts' => 'flv,swf,mp4,mpeg,rm,rmvb',
    'attachment_video_size' => '20',
    'attachment_audio_exts' => 'mp3',
    'attachment_audio_size' => '20',
    'upload_dir' => '[YYYY]/[MM]',
    'image_resize' => '1',
    'image_width' => '980',
    'image_height' => '600',
    'image_quality' => '95',
    'watermark' => '1',
    'watermark_width' => '300',
    'watermark_height' => '200',
    'watermark_opacity' => '90',
    'watermark_image' => 'watermark.png',
    'watermark_position' => 'bottom right',
    'watermark_quality' => '90',
    'mail' => '1',
    'mail_mailer' => '2',
    'mail_from' => 'hankx_chen@163.com',
    'mail_sign' => 'zotopcms',
    'mail_delimiter' => '1',
    'mail_smtp_host' => 'smtp.163.com',
    'mail_smtp_port' => '25',
    'mail_smtp_auth' => '1',
    'mail_smtp_username' => 'hankx_chen',
    'mail_smtp_password' => 'chanlaye',
    'locale_language' => 'zh-cn',
    'locale_timezone' => '8',
    'locale_date' => 'Y-m-d',
    'locale_time' => 'H:i',
    'url_model' => 'pathinfo',
    'url_suffix' => '',
    'url_var' => 'r',
    'cache_driver' => 'file',
    'cache_expire' => '3000',
    'cache_memcache' => '127.0.0.1:11211',
    'log' => '1',
    'log_expire' => '7',
    'login_captcha' => '0',
    'login_maxfailed' => '10',
    'login_locktime' => '30',
    'safekey' => 'R82FPjR4SEEmQ7dck6Wk0PHeCr9pRFn2',
  ),
  'site' => 
  array (
    'name' => '逐涛网',
    'url' => 'http://127.0.0.1',
    'theme' => 'default',
    'title' => '逐涛网',
    'description' => '逐涛网',
    'keywords' => '逐涛网',
    'closed' => '0',
    'closedreason' => '暂时关闭',
  ),
);
?>