<?php

namespace keygenqt\rightMenu;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class ActiveAssets extends AssetBundle
{
	public $sourcePath = '@keygenqt/rightMenu/assets';

	public $js = [
		'js/yii2-right-menu.js'
	];

	public $css = [
		'css/yii2-right-menu.css'
	];
}
