<?php
namespace kak\widgets\fieldset;

use yii\web\AssetBundle;

/**
 * Class FieldSet
 * @package kak\widgets\fieldset
 */
class FieldSetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kak/fieldset/assets';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public $js = [
        'kak-fieldset.js'
    ];
}