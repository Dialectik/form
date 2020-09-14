<?php

/* @var $this yii\web\View */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = 'Админка';
?>
<div class="admin-default-index">
    <h1>Админка</h1>
    <p class="lead">
        Для перехода к таблице результатов опросов нажмите на кнопку
    </p>
    
    <p><?= Html::a("Перейти к результатам опросов", ['/admin/test/index'], ['class'=> 'btn btn-lg btn-info']); ?></p>
    
</div>
