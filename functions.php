<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('页头logo地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则使用站点名称'));
    $form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $footerLogoUrl = new Typecho_Widget_Helper_Form_Element_Text('footerLogoUrl', NULL, NULL, _t('页尾logo地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则使用站点名称'));
    $form->addInput($footerLogoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则不设置favicon'));
    $form->addInput($favicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $iosicon = new Typecho_Widget_Helper_Form_Element_Text('iosicon', NULL, NULL, _t('apple touch icon地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则不设置Apple Touch Icon'));
    $form->addInput($iosicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $searchPage = new Typecho_Widget_Helper_Form_Element_Text('searchPage', NULL, NULL, _t('搜索页地址'), _t('输入你的 Template Page of Search 的页面地址,记得带上 http:// 或 https://'));
    $form->addInput($searchPage->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));


    $GoogleAnalytics = new Typecho_Widget_Helper_Form_Element_Textarea('GoogleAnalytics', NULL, NULL, _t('Google Analytics代码'), _t('填写你从Google Analytics获取到的Universal Analytics跟踪代码，不需要script标签'));
    $form->addInput($GoogleAnalytics);


    $default_thumb = new Typecho_Widget_Helper_Form_Element_Text('default_thumb', NULL, '', _t('默认X工具图标'), _t('X工具没有图标时的默认图标，留空则无，一般为http://www.yourblog.com/image.png'));
    $form->addInput($default_thumb->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
}


// 为主题增加一个自动绑定的输入框
function themeFields($layout)
{
    $icon = new Typecho_Widget_Helper_Form_Element_Text('icon', NULL, NULL, _t('图标'), _t('该X工具的图标'));
    $des = new Typecho_Widget_Helper_Form_Element_Text('des', NULL, NULL, _t('简述'), _t('该X工具的简述，不超过15字'));
    $url = new Typecho_Widget_Helper_Form_Element_Text('url', NULL, NULL, _t('链接'), _t('该X工具的地址链接'));
    $layout->addItem($icon);
    $layout->addItem($des);
    $layout->addItem($url);
}

function showThumb($obj, $size = null, $link = false)
{
    if ($obj->fields->icon) {
        return $obj->fields->icon;
    }

    preg_match_all("/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches);
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment;
    if (isset($attach->isImage) && $attach->isImage == 1) {
        $thumb = $attach->url;
        if (!empty($options->src_add) && !empty($options->cdn_add)) {
            $thumb = str_ireplace($options->src_add, $options->cdn_add, $thumb);
        }
    } elseif (isset($matches[1][0])) {
        $thumb = $matches[1][0];
        if (!empty($options->src_add) && !empty($options->cdn_add)) {
            $thumb = str_ireplace($options->src_add, $options->cdn_add, $thumb);
        }
    }
    if (empty($thumb) && empty($options->default_thumb)) {
        return '';
    } else {
        $thumb = empty($thumb) ? $options->default_thumb : $thumb;
    }
    if ($link) {
        return $thumb;
    }
}

function getUrl($obj)
{
    if ($obj->fields->url) {
        echo $obj->fields->url;
    } else {
        $obj->permalink();
    }
}
