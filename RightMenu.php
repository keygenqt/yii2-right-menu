<?php

namespace keygenqt\rightMenu;

class RightMenu extends \yii\widgets\Menu
{
    public $titleUrl = [];
    public $itemsFront = [];
    public $up = true;
    public $title;
    public $subtitle;
    public $width = 350;

    public function run()
	{
        FontAwesomeAssets::register($this->getView());
        ActiveAssets::register($this->getView());
        
        for ($i = 0; $i<count($this->items); $i++) {
            if (empty($this->items[$i]['url'])) {
                $this->items[$i]['url'] = '#';
            }
        }
        for ($i = 0; $i<count($this->itemsFront); $i++) {
            if (empty($this->itemsFront[$i]['icon'])) {
                throw new Exception('Items front icon required.');
            }
            if (!isset($this->itemsFront[$i]['options'])) {
                $this->itemsFront[$i]['options'] = [];
            }
            if (isset($this->itemsFront[$i]['color']) && isset($this->itemsFront[$i]['options']['style'])) {
                $this->itemsFront[$i]['options']['style'] = "background: {$this->itemsFront[$i]['color']};" . $this->itemsFront[$i]['options']['style'];
            } elseif (isset($this->itemsFront[$i]['color'])) {
                $this->itemsFront[$i]['options']['style'] = "background: {$this->itemsFront[$i]['color']};";
            }
            if (!isset($this->itemsFront[$i]['optionsLink'])) {
                $this->itemsFront[$i]['optionsLink'] = [];
            }
        }
		return  $this->getView()->render('@keygenqt/rightMenu/views/view', ['widget' => $this]);
    }
}