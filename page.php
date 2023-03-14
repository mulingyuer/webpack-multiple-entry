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
  <?php $this->need("./dist/head/page.php");?>
</head>
<body>
  这是page页面，是一个默认的独立页模板文件，用于显示独立页面的内容，如果你想要测试，可以在管理后台新建一个独立页面，然后输入路径访问。
</body>
</html>