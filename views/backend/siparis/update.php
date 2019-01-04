<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Siparis */

$this->title = 'Update Siparis: ' . $model->SiparisID;
$this->params['breadcrumbs'][] = ['label' => 'Siparis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SiparisID, 'url' => ['view', 'id' => $model->SiparisID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siparis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
