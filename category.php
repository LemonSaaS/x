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

        <div class="panel">
            <div class="panel-title card">
                <?php $this->archiveTitle("",""); ?>
            </div>
            <div class="panel-body">
                <div class="row">

                    <?php while ($this->next()): ?>
                        <div class="sm-6 md-4 lg-3">
                            <div class="card">
                                <a class="card-heading link-tooltip" title="<?php $this->title() ?>"
                                   href="<?php getUrl($this); ?>">

                                    <span class="card-icon">
                                    <?php $thumb = showThumb($this, null, true); ?>
                                        <?php if (!empty($thumb)): ?>
                                            <img src="<?php echo $thumb; ?>">
                                        <?php else : ?>
                                            <img src="<?php $this->options->themeUrl('assets/images/lemonsaas.png'); ?>">
                                        <?php endif; ?>
                                    </span>

                                    <span class="card-title"><?php $this->title() ?></span>
                                </a>
                                <div class="card-body">
                                    <?php
                                    if ($this->fields->des) {
                                        echo $this->fields->des;
                                    } else {
                                        $this->excerpt(20, '');
                                    }
                                    ?>
                                </div>
                                <div class="card-footer">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="btn-view" data-url="<?php $this->permalink() ?>">
                                                <a href="<?php $this->permalink() ?>"
                                                   target="_blank">
                                                    <i class="czs-eye-l"></i>
                                                    <span><?php echo ViewsCounter_Plugin::getViews(); ?></span>
                                                </a>
                                            </td>
                                            <td class="favour">
                                                <i class="czs-heart"></i>
                                                <span class="count post-like"
                                                      data-pid="<?php echo $this->cid ?>"> <?php Like_Plugin::theLike(false); ?></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>


        <?php $this->need('footer.php'); ?>
