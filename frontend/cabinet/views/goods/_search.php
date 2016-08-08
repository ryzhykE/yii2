<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Search\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_goods') ?>

    <?= $form->field($model, 'town') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'categories') ?>

    <?= $form->field($model, 'tovar') ?>

    <?php // echo $form->field($model, 'prise') ?>

    <?php // echo $form->field($model, 'bye') ?>

    <?php // echo $form->field($model, 'sale') ?>

    <?php // echo $form->field($model, 'client') ?>

    <?php // echo $form->field($model, 'general_image') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'discription') ?>

    <?php // echo $form->field($model, 'delivery') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'contacts') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'hot') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
