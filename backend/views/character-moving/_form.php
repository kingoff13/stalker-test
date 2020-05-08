<?php

use common\models\Character;
use common\models\Location;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CharacterMoving */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="character-moving-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'character_id')
        ->label(Yii::t('backend', 'Character'))
        ->dropDownList(ArrayHelper::map(Character::find()->all(), 'id', 'name')) ?>

    <?php echo $form->field($model, 'location_id')
        ->label(Yii::t('backend', 'Location'))
        ->dropDownList(ArrayHelper::map(Location::find()->all(), 'id', 'name')) ?>

<!--    --><?php //echo $form->field($model, 'visit_at')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('backend', $model->isNewRecord ? 'Create' : 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
