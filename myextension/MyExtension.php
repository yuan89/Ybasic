<?php

namespace myextension;

use Yii;

class MyExtension extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->id = 'myextension';
        $this->version = '1.0';

        Yii::configure($this, require __DIR__ . '/config.php');

        if (Yii::$app instanceof \yii\web\Application) {
            $this->registerTranslations();
        }
    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations['myextension*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@myextension/messages',
            'sourceLanguage' => 'en-US',
        ];
    }
}
