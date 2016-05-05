<?php

namespace keygenqt\verticalMenu;

use \yii\base\Exception;

class VerticalMenu extends \yii\widgets\Menu
{
    public $side = 'left';
    public $titleUrl = [];
    public $itemsFront = [];
    public $up = true;
    public $title;
    public $subtitle;
    public $width = 350;

    public $colorBg = '#3d0047';
    public $colorBtn = '#6A0088';

    public function run()
	{
        FontAwesomeAsset::register($this->getView());

        if ($this->side == 'left') {
            ActiveAssets::register($this->getView());
        } else if ($this->side == 'right') {
            ActiveRightAssets::register($this->getView());
        }

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
        if ($this->side == 'right') {
            return  $this->getView()->render('@keygenqt/verticalMenu/views/view-right', ['widget' => $this]);
        }
        return  $this->getView()->render('@keygenqt/verticalMenu/views/view', ['widget' => $this]);
    }
}