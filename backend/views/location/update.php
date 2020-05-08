<?php


/* @var $this yii\web\View */
/* @var $model common\models\Location */

$this->title = Yii::t('backend', 'Update Location').': ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="location-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
