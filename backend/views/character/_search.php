<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CharacterSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="character-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'name') ?>

    <?php echo $form->field($model, 'killed') ?>

    <?php echo $form->field($model, 'clan') ?>

    <?php echo $form->field($model, 'password_hash') ?>

    <?php echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'logged_at') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
