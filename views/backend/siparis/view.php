<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Siparis */

$this->title = $model->SiparisID;
$this->params['breadcrumbs'][] = ['label' => 'Siparis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siparis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SiparisID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SiparisID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'UrunID',
            'UserID',
            'UrunAdi',
            'UrunFiyat',
            'SiparisID',
        ],
    ]) ?>

</div>
