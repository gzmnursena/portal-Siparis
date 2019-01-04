<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Urunler */

$this->title = $model->UrunID;
$this->params['breadcrumbs'][] = ['label' => 'Urunlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urunler-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->UrunID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->UrunID], [
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
            'UrunAdi',
            'UrunFiyat',
            'UrunAdet',
        ],
    ]) ?>

</div>
