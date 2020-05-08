<?php



/* @var $this yii\web\View */
/* @var $model common\models\Thing */

$this->title = Yii::t('backend', 'Create Thing');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Things'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thing-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
