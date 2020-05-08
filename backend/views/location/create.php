<?php



/* @var $this yii\web\View */
/* @var $model common\models\Location */

$this->title = Yii::t('backend', 'Create Location');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
