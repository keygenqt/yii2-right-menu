Vertical Menu
===================

![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-vertical-menu)

Vertical Menu right/left position for admin panel or other areas on yii2.

<p>
    <a href="https://old.keygenqt.com/work/yii2-vertical-menu">
        <img src="data/demo_button.gif" width="136px"/>
    </a>
</p>

#### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
"require": {
    "keygenqt/yii2-vertical-menu": "1.0.2"
}
```

#### Usage

```php
echo \keygenqt\verticalMenu\VerticalMenu::widget([
    'title' => 'KeyGenQt',
    'subtitle' => 'Admin panel',
    'titleUrl' => '#',
    'width' => 350,
    'side' => 'right',
    'itemsFront' => [
        [
            'url' => '#',
            'icon' => 'fas fa-sign-out-alt',
            'color' => '#2cb6e9',
            'options' => [
                'style' => 'padding-top: 24px;'
            ],
        ],
    ],
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => '#',
        ],
        [
            'label' => '<i class="fas fa-caret-down"></i> Multimedia',
            'items' => [
                [
                    'label' => 'Music',
                    'url' => '#',
                    'active' => true
                ],
                [
                    'label' => 'Video',
                    'url' => '#',
                ],
                [
                    'label' => 'Podcast',
                    'url' => '#',
                ],
            ]
        ],
        [
            'label' => '<i class="fas fa-caret-down"></i> Translations',
            'items' => [
                [
                    'label' => 'Books',
                    'url' => '#',
                ],
                [
                    'label' => 'Post',
                    'url' => '#',
                ],
            ]
        ],
    ]
]);
```

#### License

```
Copyright 2016-2024 Vitaliy Zarubin

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
