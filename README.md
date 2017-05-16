# kak-fieldset

Bootstrap Fieldset widgets for Yii2

Preview
-----------
<img src="https://4.bp.blogspot.com/-EO-dSwtckWs/WRrVXZWAiPI/AAAAAAAAAJs/dsB86pPgeAUc1QtgJe60q0c5nLMiVSxkQCLcB/s1600/kak-fieldset-widget.png">
Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kak/fieldset "dev-master"
```

or add

```
"kak/fieldset": "dev-master"
```

to the require section of your `composer.json` file.

Usage
-----
```php
<?php kak\widgets\fieldset\FieldSet::begin([
    'legend' => Yii::t('app-dash','user info'),
    // 'active' => true // false - hide content, default true
    // 'speed'  => 500, // animation speed default value 300
    // 'dataUp' => "<i class='glyphicon glyphicon-collapse-up'></i> ",     // template content icon
    // 'dataDown'  => "<i class='glyphicon glyphicon-collapse-down'></i> ",   // template content icon
]);?>

... content ...

<?php kak\widgets\fieldset\FieldSet::end(); ?>

```
