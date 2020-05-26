<?php
/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/* @var $widget keygenqt\verticalMenu\VerticalMenu */

use yii\helpers\Html;

?>

<style>
    .vertical-menu-right {
        right: -<?= $widget->width - 75; ?>px;
        width: <?= $widget->width; ?>px;
    }

    @keyframes vertical-menu-right-close {
        0% {
            right: -<?= $widget->width - 75; ?>px;
        }
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
    .vertical-menu-right-ul li.active a {
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
                    <?php if ($widget->up): ?>
                        <li id="menu-right-vertical-up">
                            <i class="fa fa-chevron-up"></i>
                        </li>
                    <?php endif; ?>
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
                'encodeLabels' => false,
                'options' => [
                    'class' => 'vertical-menu-right-ul'
                ],
                'items' => $widget->items,
            ]); ?>
        </div>

    </div>
</div>
