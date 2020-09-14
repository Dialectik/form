<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Modal;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Админ: Опросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'scale',
            'comment:ntext',
            //'created_at',
            [
	            'filter' => DatePicker::widget([
	                'model' => $searchModel,
	                'attribute' => 'updated_at',
	                'type' => DatePicker::TYPE_COMPONENT_APPEND,
	                'pluginOptions' => ['format' => 'yyyy-mm-dd']
	            ]),
	            'attribute' => 'updated_at',
	            'format' => 'date',
	        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
