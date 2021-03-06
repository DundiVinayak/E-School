<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Guest_msg */

$this->title = 'Update Guest Msg: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guest Msgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guest-msg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
