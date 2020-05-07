<?php


/* @var $this yii\web\View */
/* @var $model common\models\Character */

$this->title = 'Update Character: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="character-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
