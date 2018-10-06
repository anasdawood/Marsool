<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Projects');
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("https://use.fontawesome.com/releases/v5.3.1/css/all.css");
$this->registerCssFile("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css");
?>
<div class="projects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <p>
        <?= Html::a(Yii::t('frontend', 'Create Projects'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="body-content">
        <div class="row">
            <?php foreach ($models as $i => $model): ?>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <?= $model->title ?>
                        </div>
                        <img class="card-img-top" alt="<?= $model->title ?>" style="height: 225px; width: 100%; display: block;" src="<?= 'uploads\\' . $model->image; ?>" data-holder-rendered="true">
                        <div class="card-body" >
                            <div style="padding: 15px">
                                <p class="card-text"><?= $model->description ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary"> <i class="fas fa-map-marker-alt"></i> <?=$model->location ?></button>
                                        <button type="button" class="btn btn-sm btn-success"><?= Yii::t('frontend', 'Raised: ') . $model->raised ?></button>
                                    </div>
                                    <small class="text-muted" style="float: right"><i class="fas fa-bullseye"></i><?= $model->goal ?></small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <?= Html::a(Yii::t('frontend', 'Details'), ['view','id' => $model->id], ['class' => 'btn btn-sm btn-danger']) ?>
                                        
                                    </div>
                                    <small class="text-muted" style="float: right"><i class="fas fa-calendar-alt"></i> <?= $model->dead_line ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php
            echo LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
        </div>
    </div>

</div>
