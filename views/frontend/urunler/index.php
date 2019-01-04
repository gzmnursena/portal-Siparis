<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UrunlerSearch 
  <p>
        <?= Html::a('Create Urunler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>*/
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urunler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urunler-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UrunID',
            'UrunAdi',
            'UrunFiyat',
            'UrunAdet',
            

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => ' {add} ',
                'buttons' => [
                    'add' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url);
                    },
                ],
            ],
        ],
    ]); ?>
    <p><a class="btn btn-lg btn-success" href="http://portal.kouosl/siparis/siparis/index">Siparişlerimi Listele</a></p>
</div>
