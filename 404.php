<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<style>
    body {
        background-color: #fff;
    }
    .error-page {
        text-align: center;
        margin-top: 100px;
        color: #171717;
    }
    .error-page img {
        display: block;
        max-width: 360px;
        height: auto;
        margin: 60px auto 0;
    }
    h2 {
        font-size: 18px;
    }
    a {
        font-size: 12px;
        text-decoration: none;
        color: #bbb;
    }
    a:hover {
        color: #15b762;
    }
</style>

<div class="error-page">
    <h2>访问的页面不存在</h2>
    <a href="/">返回<?php $this->options->title(); ?>首页</a>
</div>

