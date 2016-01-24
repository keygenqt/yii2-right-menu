<?php

namespace keygenqt\rightMenu;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class FontAwesomeAssets extends AssetBundle
{
	public $sourcePath = '@vendor/fortawesome/font-awesome';
	public $css = [
        'css/font-awesome.min',
	];
}
