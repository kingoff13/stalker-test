<?php


/* @var $this yii\web\View */
/* @var $model common\models\Thing */

$this->title = Yii::t('backend', 'Update Thing').': ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Things'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="thing-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
