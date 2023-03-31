<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Extension';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

