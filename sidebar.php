<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidenav">
    <a class="logo" href="index.html">
        <img src="<?php $this->options->themeUrl('assets/images/logo.svg')?>" alt="logo">
    </a>
    <div class="site-description">
        为创意工作者而设计
    </div>
    <div class="nav-item nav-item-1 active">
        <a href="index.html">
            <i class="csz czs-circle"></i>
            <span>设计 Design</span>
        </a>
    </div>
    <ul class="nav-tags mCustomScrollbar" style="display: block;">
        <li>
            <a href="#%E7%83%AD%E9%97%A8%E6%8E%A8%E8%8D%90">
                <i class="csz czs-trophy-l"></i>
                热门推荐                                </a>
        </li>
        <li>
            <a href="#%E7%81%B5%E6%84%9F%E9%87%87%E9%9B%86">
                <i class="csz czs-light-l"></i>
                灵感采集                                </a>
        </li>
    </ul>


    <a class="copyright" href="about.html">© <?php $this->options->title(); ?></a>
</div>


<!-- end #sidebar -->
