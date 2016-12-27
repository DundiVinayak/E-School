<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Guest_msg */

$this->title = 'Create Guest Msg';
$this->params['breadcrumbs'][] = ['label' => 'Guest Msgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guest-msg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
