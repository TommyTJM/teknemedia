<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\contactform */

$this->title = 'Update Contactform: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contactforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contactform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
