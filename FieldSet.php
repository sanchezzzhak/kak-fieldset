<?php

namespace kak\widgets\fieldset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class FieldSet extends \yii\base\Widget
{
    public $options = [];

    public $legend = '';

    public $beforeLegendButton = true;
    public $active = true;

    public $speed = '300';
    public $dataUp = "<i class='glyphicon glyphicon-collapse-up'></i> ";
    public $dataDown ="<i class='glyphicon glyphicon-collapse-down'></i>";



    public function init()
    {
        parent::init();

        if (!isset($this->options['data-speed'])) {
            $this->options['data-speed'] = $this->speed;
        }
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        Html::addCssClass($this->options,'kak-fieldset');

        $legendButton = ' <span class="act-fieldset" data-up="'.$this->dataUp. '" data-down="'.$this->dataDown.'">'.(
                $this->active ? $this->dataUp : $this->dataDown
            ).'</span> ';

        echo Html::beginTag('fieldset', $this->options);

        echo Html::tag('legend',$this->beforeLegendButton ? $legendButton .$this->legend : $this->legend . $legendButton );

        echo Html::beginTag('div',[
            'class' => 'content-fieldset',
            'style' => 'display:' .( $this->active ? 'block' : 'none')
        ]);

    }

    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('fieldset');

        $view = $this->getView();
        FieldSetAsset::register($view);

    }

}