<?php


/* @var $this yii\web\View */
/* @var $model common\models\CharacterMoving */

$this->title = 'Update Character Moving: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Character Movings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="character-moving-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
