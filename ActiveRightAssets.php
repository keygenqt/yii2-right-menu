<?php

namespace keygenqt\verticalMenu;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class ActiveRightAssets extends AssetBundle
{
	public $sourcePath = '@keygenqt/verticalMenu/assets-right';

	public $js = [
		'js/yii2-vertical-menu.js'
	];

	public $css = [
		'css/yii2-vertical-menu.css'
	];
}
