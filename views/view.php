<?php
    /* @var $widget keygenqt\rightMenu\RightMenu */
    use \yii\helpers\Html;
?>

<style>
    .right-menu {
        left: -<?= $widget->width - 75; ?>px;
        width: <?= $widget->width; ?>px;
    }
    @keyframes right-menu-close {
        0% { left: -<?= $widget->width - 75; ?>px; }
        100% { left: 0; }
    }
    @keyframes right-menu-open {
        0% { left: 0; }
        100% { left: -<?= $widget->width - 75; ?>px; }
    }
    .right-menu-close { left: -<?= $widget->width - 75; ?>px; }
    .right-menu-open { left: 0; }
    
    <?php if (!empty($widget->titleUrl)): ?>
        .header-menu-right {
            cursor: pointer;
        }
    <?php endif; ?>
</style>

<div class="right-menu">
    <div class="header-menu-right"
        <?php if (!empty($widget->titleUrl)): ?>
            onclick="window.location.href='<?= \yii\helpers\Url::toRoute($widget->titleUrl) ?>'"
        <?php endif; ?>
    >
        <div><?= $widget->title ?></div>
        <div><?= $widget->subtitle ?></div>
    </div>
    <div class="right-menu-block">
        <div class="right-menu-hide">
            <?= \yii\widgets\Menu::widget([
                'options' => [
                    'class' => 'right-menu-ul'
                ],
                'items' => $widget->items,
            ]); ?>
        </div>

        <div class="right-menu-show">
            <ul>
                <li id="menu-right-show">
                    <i class="fa fa-bars"></i>
                </li>
            </ul>
            <ul>
                <li id="menu-right-up">
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
