<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = '修改资讯' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '资讯管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="box box-info">
    <div class="box-header">
          <div class="btn-group">
            <?=  Html::a('<i class="fa fa-trash-o"></i>', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-default',
                'data' => [
                    'confirm' => '您确定要删除该项目吗？',
                    'method' => 'post',
                ],
            ]) ?>
            <!-- /.btn-group -->
        </div>
        <div class="pull-right">
            <?=  Html::a('<i class="fa fa-reply"></i>', ['index'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
