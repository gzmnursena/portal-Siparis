<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Urunler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urunler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UrunID')->textInput() ?>

    <?= $form->field($model, 'UrunAdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UrunFiyat')->textInput() ?>

    <?= $form->field($model, 'UrunAdet')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
