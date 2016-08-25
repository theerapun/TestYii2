<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = $model->namegroup;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-view">
    <div class="alert alert-info">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="panel panel-danger">
        <div class="panel-heading"> แก้ไขข้อมูล : แม่บ้าน</div>
        <div class="panel-body">
            <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'namegroup',
        ],
    ]) ?>
            
        </div>
    </div>
</div>
<p>
        <?= Html::a('แก้ไขข้อมูล', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบข้อมูล', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
