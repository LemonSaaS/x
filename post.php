<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div>
    <div class="main">

        <a href="<?php $this->options->siteUrl(); ?>">
            <div class="board selected-nav">
                <span class="selected-nav-cn"><?php $this->options->title() ?></span>
                <span class="post-category"><?php $this->options->description() ?></span>
            </div>
        </a>

        <div class="board selected-nav">
            <span class="post-card-icon">
                                <?php $thumb = showThumb($this, null, true); ?>
                <?php if (!empty($thumb)): ?>
                    <img src="<?php echo $thumb; ?>">
                <?php else : ?>
                    <img src="<?php $this->options->themeUrl('assets/images/lemonsaas.png'); ?>">
                <?php endif; ?>
                                </span>
            <span class="selected-nav-cn"><?php $this->title() ?></span>
            <span class="post-category">
                <?php $this->category(''); ?>
            </span>
        </div>
        <div class="panel">
            <?php if (count($this->tags) > 0): ?>
                <div class="panel-title card">
                    <?php $this->tags('</div><div class="panel-title card">', false, ''); ?>
                </div>
            <?php endif; ?>

            <div class="panel-body">
                <div class="row">
                    <div class="sm-12">
                        <?php $this->content(); ?>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->need('footer.php'); ?>
