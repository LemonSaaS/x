<?php
/**
 * LemonSaaS X theme
 *
 * @package LemonSaaS X theme
 * @author ghostsf
 * @version 1.0
 * @link https://x.lemonsaas.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<!-- start #main-->

<!--class="main-wrap"-->

<div>
    <div class="main">

        <a href="<?php $this->options->siteUrl(); ?>">
            <div class="board selected-nav">
                <span class="selected-nav-cn"><?php $this->options->title() ?></span>
                <span class="post-category"><?php $this->options->description() ?></span>
            </div>
        </a>


        <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
        <?php if ($categorys->have()): ?>
            <?php while ($categorys->next()): ?>
                <?php $catlist = $this->widget('Widget_Archive@categorys_' . $categorys->mid, 'pageSize=10000&type=category', 'mid=' . $categorys->mid); ?>
                <?php if ($catlist->have()): ?>

                    <a id="<?php $categorys->name(); ?>" href="<?php $categorys->permalink(); ?>"></a>
                    <div class="panel">
                        <div class="panel-title card">
<!--                            <i class="czs-trophy-l"></i>-->
                            <a href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <?php while ($catlist->next()): ?>
                                    <div class="sm-6 md-4 lg-3">
                                        <div class="card">
                                            <a class="card-heading link-tooltip" title="<?php $catlist->title() ?>"
                                               href="<?php $catlist->permalink() ?>">

                                <span class="card-icon">
                                <?php $thumb = showThumb($this, null, true); ?>
                                    <?php if (!empty($thumb)): ?>
                                        <img src="<?php echo $thumb; ?>)">
                                    <?php else : ?>
                                        <img src="<?php $this->options->themeUrl('assets/images/D/dribbble.png'); ?>">
                                    <?php endif; ?>
                                </span>

                                                <span class="card-title"><?php $catlist->title() ?></span>
                                            </a>
                                            <div class="card-body">
                                                <?php $this->excerpt(20, ''); ?>
                                            </div>
                                            <div class="card-footer">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="btn-view" data-url="<?php $catlist->permalink() ?>">
                                                            <a href="<?php $catlist->permalink() ?>"
                                                               target="_blank">
                                                                <i class="czs-eye-l"></i>
                                                                <span><?php echo ViewsCounter_Plugin::getViews(); ?></span>
                                                            </a>
                                                        </td>
                                                        <td class="favour">
                                                            <i class="czs-heart"></i>
                                                            <span class="count post-like"
                                                                  data-pid="<?php echo $catlist->cid ?>"> <?php Like_Plugin::theLike(false); ?></span>
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
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>


        <!-- end #main-->

        <?php $this->need('footer.php'); ?>
