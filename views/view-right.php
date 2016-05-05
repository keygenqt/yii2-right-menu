<?php
    /* @var $widget keygenqt\verticalMenu\VerticalMenu */
    use \yii\helpers\Html;
?>

<style>
    .vertical-menu-right {
        right: -<?= $widget->width - 75; ?>px;
        width: <?= $widget->width; ?>px;
    }
    @keyframes vertical-menu-right-close {
        0% { right: -<?= $widget->width - 75; ?>px; }
        100% { right: 0; }
    }
    @keyframes vertical-menu-right-open {
        0% { right: 0; }
        100% { right: -<?= $widget->width - 75; ?>px; }
    }
    .vertical-menu-right-close { right: -<?= $widget->width - 75; ?>px; }
    .vertical-menu-right-open { right: 0; }

    <?php if (!empty($widget->titleUrl)): ?>
        .header-menu-right-vertical {
            cursor: pointer;
        }
    <?php endif; ?>

    /** COLORS **/
    body .vertical-menu-right-ul li.active a {
        background: <?= $widget->colorBtn ?>;
    }
    body .vertical-menu-right .vertical-menu-right-show ul li:first-child {
        background: <?= $widget->colorBtn ?>;
        border-bottom: 1px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right .vertical-menu-right-hide {
        padding-bottom: 0;
    }
    body .vertical-menu-right-ul li.active li.active a {
        background: <?= $widget->colorBtn ?>;
    }
    body .vertical-menu-right .vertical-menu-right-show {
        background: <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right-ul ul li:first-child a {
        border-top: 5px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right-ul li a {
        border-top: none;
        border-bottom: 1px solid <?= $widget->colorBg ?>;
        text-align: right;
    }
    body .vertical-menu-right-ul li.active li a {
        color: <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right-ul li a {
        color: <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right-ul li:last-child a {
        border-bottom: 1px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right-ul li li a {
        border-left: 4px solid <?= $widget->colorBg ?>;
    }
    body .vertical-menu-right .header-menu-right-vertical {
        border-bottom: 1px solid <?= $widget->colorBg ?>;
        border-top: 1px solid <?= $widget->colorBtn ?>;
    }
    body .vertical-menu-right-ul ul li:last-child a {
        border-bottom: 4px solid <?= $widget->colorBg ?>;
    }
    /** COLORS **/

</style>

<div class="vertical-menu-right">
    <div class="header-menu-right-vertical"
        <?php if (!empty($widget->titleUrl)): ?>
            onclick="window.location.href='<?= \yii\helpers\Url::toRoute($widget->titleUrl) ?>'"
        <?php endif; ?>
    >
        <div><?= $widget->title ?></div>
        <div><?= $widget->subtitle ?></div>
    </div>
    <div class="vertical-menu-right-block">


        <div class="vertical-menu-right-show">
            <ul>
                <li id="menu-right-vertical-show">
                    <i class="fa fa-bars"></i>
                </li>
            </ul>
            <ul>
                <li id="menu-right-vertical-up">
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

        <div class="vertical-menu-right-hide">
            <?= \yii\widgets\Menu::widget([
                'options' => [
                    'class' => 'vertical-menu-right-ul'
                ],
                'items' => $widget->items,
            ]); ?>
        </div>

    </div>
</div>
