<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiparisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siparis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UrunID') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'UrunAdi') ?>

    <?= $form->field($model, 'UrunFiyat') ?>

    <?= $form->field($model, 'SiparisID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
