<?php

use common\models\Character;
use common\models\Thing;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CharacterInventory */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="character-inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'character_id')->dropDownList(ArrayHelper::map(Character::find()->all(), 'id', 'name')) ?>

    <?php echo $form->field($model, 'thing_id')->dropDownList(ArrayHelper::map(Thing::find()->all(), 'id', 'name')) ?>

    <?php echo $form->field($model, 'used')->textInput() ?>

    <?php echo $form->field($model, 'location')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
