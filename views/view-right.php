<?php
    /* @var $widget keygenqt\verticalMenu\RightMenu */
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
