<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Needy */

$this->title = Yii::t('frontend', 'Create Needy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Needies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="needy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
