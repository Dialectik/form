<?php

/* @var $this yii\web\View */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Добро пожаловать!</h1>

        <p class="lead">Для прохождения анкеты нажмите кнопку ниже.</p>

        <p><?= Html::a("Пройти анкету", ['/test/create'], ['class'=> 'btn btn-lg btn-success']); ?></p>
        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2></h2>

                <p></p>

                <p></p>
            </div>
            <div class="col-lg-4">
                <h2></h2>

                <p></p>

                <p></p>
            </div>
            <div class="col-lg-4">
                <h2></h2>

                <p></p>

                <p></p>
            </div>
        </div>

    </div>
</div>
