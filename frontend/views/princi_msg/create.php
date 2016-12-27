<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Princi_msg */

$this->title = 'Create Princi Msg';
$this->params['breadcrumbs'][] = ['label' => 'Princi Msgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="princi-msg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
