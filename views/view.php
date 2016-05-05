<?php
    /* @var $widget keygenqt\verticalMenu\VerticalMenu */
    use \yii\helpers\Html;
?>

<style>
    .vertical-menu {
        left: -<?= $widget->width - 75; ?>px;
        width: <?= $widget->width; ?>px;
    }
    @keyframes vertical-menu-close {
        0% { left: -<?= $widget->width - 75; ?>px; }
        100% { left: 0; }
    }
    @keyframes vertical-menu-open {
        0% { left: 0; }
        100% { left: -<?= $widget->width - 75; ?>px; }
    }
    .vertical-menu-close { left: -<?= $widget->width - 75; ?>px; }
    .vertical-menu-open { left: 0; }
    
    <?php if (!empty($widget->titleUrl)): ?>
        .header-menu-vertical {
            cursor: pointer;
        }
    <?php endif; ?>


    /** COLORS **/
    body .vertical-menu-ul li.active a {
        background: <?= $widget->colorBtn ?>;
    }
    body .vertical-menu .vertical-menu-show ul li:first-child {
        background: <?= $widget->colorBtn ?>;
        border-bottom: 1px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu .vertical-menu-hide {
        padding-bottom: 0;
    }
    body .vertical-menu-ul li.active li.active a {
        background: <?= $widget->colorBtn ?>;
    }
    body .vertical-menu .vertical-menu-show {
        background: <?= $widget->colorBg ?>;
    }
    body .vertical-menu-ul ul li:first-child a {
        border-top: 5px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-ul li a {
        border-top: none;
        border-bottom: 1px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-ul li.active li a {
        color: <?= $widget->colorBg ?>;
    }
    body .vertical-menu-ul li a {
        color: <?= $widget->colorBg ?>;
    }
    body .vertical-menu-ul li:last-child a {
        border-bottom: 1px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-ul li li a {
        border-left: 4px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu .header-menu-vertical {
        border-bottom: 1px solid <?= $widget->colorBg ?>;
        border-top: 1px solid <?= $widget->colorBtn ?>;
    }
    body .vertical-menu-ul ul li:last-child a {
        border-bottom: 4px solid <?= $widget->colorBg ?>;
    }
    /** COLORS **/

</style>

<div class="vertical-menu">
    <div class="header-menu-vertical"
        <?php if (!empty($widget->titleUrl)): ?>
            onclick="window.location.href='<?= \yii\helpers\Url::toRoute($widget->titleUrl) ?>'"
        <?php endif; ?>
    >
        <div><?= $widget->title ?></div>
        <div><?= $widget->subtitle ?></div>
    </div>
    <div class="vertical-menu-block">
        <div class="vertical-menu-hide">
            <?= \yii\widgets\Menu::widget([
                'options' => [
                    'class' => 'vertical-menu-ul'
                ],
                'items' => $widget->items,
            ]); ?>
        </div>

        <div class="vertical-menu-show">
            <ul>
                <li id="menu-vertical-show">
                    <i class="fa fa-bars"></i>
                </li>
            </ul>
            <ul>
                <li id="menu-vertical-up">
                    <i class="fa fa-chevron-up"></i>
                </li>
            </ul>
            
            <?php if (!empty($widget->itemsFront)): ?>
                <ul>
                    <?php
                        foreach ($widget->itemsFront as $item) {
                            if (isset($item['url'])) {
                                echo Html::a(Html::tag('li', Html::tag('i', '', ['class' => $item['icon']]), $item['options']), $item['url'], $item['optionsLink']);
                            } else {
                                echo Html::tag('li', Html::tag('i', '', ['class' => $item['icon']]), $item['options']);
                            }
                        }
                    ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
