<?php

namespace keygenqt\verticalMenu;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class FontAwesomeAsset extends AssetBundle 
{
    public $sourcePath = '@bower/font-awesome'; 
    public $css = [ 
        'css/font-awesome.min.css', 
    ];
    public $publishOptions = [
        'only' => [
            'fonts/*',
            'css/font-awesome.min.css',
        ]
    ];
}  
