<?php
/**
 * 这是一个用于开发 Typecho 博客主题的的多页面打包项目，已在github开源。
 * 欢迎star和fork，地址：https://github.com/mulingyuer/webpack-multiple-entry
 *
 * @package webpack-multiple-entry
 * @author mulingyuer
 * @version 1.0.0
 * @link https://www.mulingyuer.com
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php $this->archiveTitle([
    'category' => _t('分类 %s 下的文章'),
    'search' => _t('包含关键字 %s 的文章'),
    'tag' => _t('标签 %s 下的文章'),
    'author' => _t('%s 发布的文章'),
], '', ' - ');?><?php $this->options->title();?></title>
  <?php $this->need("./dist/head/home.php");?>
</head>
<body>
  这是首页
</body>
</html>