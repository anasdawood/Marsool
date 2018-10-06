<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Volunteer */

$this->title = Yii::t('frontend', 'Create Volunteer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Volunteers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
