<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Siparis */

$this->title = 'Create Siparis';
$this->params['breadcrumbs'][] = ['label' => 'Siparis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siparis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
