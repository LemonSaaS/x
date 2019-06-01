<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/icon/style-%3E.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<div style="margin:0 auto;width:0px;height:0px;overflow:hidden; ">
    <img src="<?php $this->options->themeUrl('assets/images/logo/300.png'); ?>">
</div>

<!--<header class="mobile-header-wrap">-->
<!--    <a class="mobile-logo" href="--><?php //$this->options->siteUrl(); ?><!--">-->
<!--        <img src="--><?php //$this->options->themeUrl('assets/images/logo_mobile.svg'); ?><!--">-->
<!--    </a>-->
<!--</header>-->
<!---->
<!--<div class="btn-mobile-sidenav">-->
<!--    <div class="nav-bar">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--    </div>-->
<!--</div>-->
    
