yii2-vertical-menu
===================

Menu takes a small amount of space with a comfortable functional. Made for my the admin panel on yii2.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-vertical-menu": "*"
},
"repositories":[
    {
        "type": "git",
        "url": "https://github.com/keygenqt/yii2-vertical-menu.git"
    }
]
```

of your `composer.json` file.

## Latest Release

The latest version of the module is v0.5.0 `BETA`.

## Usage

```php
use \keygenqt\verticalMenu\VerticalMenu;

VerticalMenu::widget([
	'title' => 'Title',
	'subtitle' => 'Subtitle',
	'titleUrl' => ['site/index'],
	'itemsFront' => [
		[
			'icon' => 'fa fa-github',
			'color' => '#829AA8',
			'url' => 'https://github.com/keygenqt',
			'optionsLink' => [
				'target' => '_blank'
			]
		], 
		[
			'url' => '/',
			'icon' => 'fa fa-sign-out',
			'color' => '#4C75A3',
			'options' => [
				'style' => '
					-webkit-transform: rotate(-180deg); 
					-moz-transform: rotate(-180deg);
					-ms-transform: rotate(-180deg);
					-o-transform: rotate(-180deg);'
			],
		], 
	],
	'items' => [
		[
			'label' => 'Yii2 ActiveRecord',
			'items' => [
				[
					'label' => 'For Parse', 
					'url' => ['yii2-active-record/parse'],
				],
				[
					'label' => 'For Vertica', 
					'url' => ['yii2-active-record/vertica'],
				]
			]
		], 
		[
			'label' => 'Yii2 Components', 
			'items' => [
				[
					'label' => 'VerticalMenu', 
					'url' => ['yii2-components/menu'],
				]
			]
		], 
	]]);

```

## License

**yii2-vertical-menu** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.


