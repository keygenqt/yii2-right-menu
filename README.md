[Vertical Menu](http://keygenqt.com/work/yii2-vertical-menu)
===================

Vertical Menu right/left position for admin panel or other areas on yii2.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-vertical-menu": "@dev"
}
```

of your `composer.json` file.

## Usage

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
