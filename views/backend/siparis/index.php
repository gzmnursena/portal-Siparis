<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiparisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siparis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siparis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Siparis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UrunID',
            'UserID',
            'UrunAdi',
            'UrunFiyat',
            'SiparisID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
