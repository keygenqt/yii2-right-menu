yii2-vertical-menu
===================

Menu takes a small amount of space with a comfortable functional. Made for my the admin panel on yii2.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-vertical-menu": "*"
}
```

of your `composer.json` file.

## Latest Release

The latest version of the module is v0.5.0 `BETA`.

## Usage

```php
<?= keygenqt\verticalMenu\VerticalMenu::widget([
		'title' => 'My application',
		'subtitle' => 'Admin panel',
		'titleUrl' => ['site/index'],
		'itemsFront' => [
			[
				'icon' => 'fa fa-sign-out',
				'url' => ['site/logout'],
				'color' => '#4C75A3',
				'options' => [
					'style' => '
						padding-top: 18px;
						-webkit-transform: rotate(-180deg); 
						-moz-transform: rotate(-180deg);
						-ms-transform: rotate(-180deg);
						-o-transform: rotate(-180deg);'
				],
			], 
		],
		'items' => [
			[
				'label' => 'Statistics',
				'items' => [
					[
						'label' => 'Dashboard',
						'url' => ['site/dashboard'],
					], 
					[
						'label' => 'Money',
						'url' => ['site/money'],
					], 
				]
			], 
			[
				'label' => 'Users',
				'url' => ['users/index'],
			], 
			[
				'label' => 'Comments',
				'url' => ['comments/index'],
			],
		]
	]);
?>
```

## Screenshot

![Alt text](https://raw.githubusercontent.com/keygenqt/yii2-vertical-menu/master/screenshot/close_1.png?raw=true "Close")
![Alt text](https://raw.githubusercontent.com/keygenqt/yii2-vertical-menu/master/screenshot/open.png?raw=true "Open")

## License

**yii2-vertical-menu** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.


