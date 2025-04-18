<?php
/* Smarty version 4.3.1, created on 2023-05-22 17:27:41
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\admin\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b358d8e7069_84369096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cccc53a91d65a290d4bd2fc14e7d3c510b6149' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\admin\\layout.html',
      1 => 1684747649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b358d8e7069_84369096 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 引入静态资源 -->
  <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/common/font-awesome-4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
  <link rel="stylesheet" href="/static/admin/css/main.css">
  <?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>

  <title>内容管理系统</title>
</head>

<body>
  <!-- 顶部导航-->
  <nav class="navbar navbar-default navbar-static-top main-nav" role="navigation">
    <div class="navbar-header">
      <!-- Bootstrap在小屏幕上显示的菜单折叠按钮 -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand">内容管理系统</div>
    </div>
    <div class="collapse navbar-collapse">
      <div class="main-sidebar">
        <!-- 左侧菜单 -->
        <ul class="nav main-menu">
          <li>
            <a href="/admin/index/index" data-name="index">
              <i class="fa fa-home fa-fw"></i>首页
            </a>
          </li>
          <li>
            <a href="/admin/category/index" data-name="category">
              <i class="fa fa-list fa-fw"></i>栏目管理
            </a>
          </li>
          <li>
            <a href="/admin/article/index" data-name="article">
              <i class="fa fa-file-o fa-fw"></i>文章管理
            </a>
          </li>
        </ul>

      </div>
      <!-- 右上角按钮 -->
      <ul class="nav navbar-right">
        <li>
          <a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a>
        </li>
        <li>
          <a href="/admin/login/logout">
            <i class="fa fa-power-off fa-fw"></i>退出
          </a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="main-container">
    <!-- 内容区域 -->
    <div class="main-content"></div>
    <div class="main-loading" style="display:none">
      <div class="dot-carousel"></div>
    </div>
  </div>
  <?php echo '<script'; ?>
>
    // 编写JavaScript代码
    main.layout();			// 初始化后台布局的基本逻辑
    main.contentRefresh();

  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
