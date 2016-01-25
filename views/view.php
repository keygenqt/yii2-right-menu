<?php
    /* @var $widget keygenqt\verticalMenu\RightMenu */
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
