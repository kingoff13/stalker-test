<?php


/* @var $this yii\web\View */
/* @var $model common\models\CharacterMoving */

$this->title = Yii::t('backend', 'Update Character Moving').': ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Character Movings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="character-moving-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
