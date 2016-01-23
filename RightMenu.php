<?php

namespace keygenqt\rightMenu;

use yii\widgets\InputWidget;

class RightMenu extends InputWidget
{
    private $_baseUrl;

    public function registerActiveAssets()
    {
        if ($this->_baseUrl === null) {
            $this->_baseUrl = ActiveAssets::register($this->getView())->baseUrl;
        }
        return $this->_baseUrl;
    }
    
    public function init()
    {
        echo $this->getView()->render('@keygenqt/rightMenu/views/view', ['widget' => $this]);

        parent::init();
    }
}