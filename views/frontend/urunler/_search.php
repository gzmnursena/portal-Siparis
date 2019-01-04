<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UrunlerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urunler-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UrunID') ?>

    <?= $form->field($model, 'UrunAdi') ?>

    <?= $form->field($model, 'UrunFiyat') ?>

    <?= $form->field($model, 'UrunAdet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
