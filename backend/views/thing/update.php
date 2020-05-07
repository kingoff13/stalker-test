<?php


/* @var $this yii\web\View */
/* @var $model common\models\Thing */

$this->title = 'Update Thing: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Things', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thing-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
