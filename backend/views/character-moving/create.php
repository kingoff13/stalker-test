<?php



/* @var $this yii\web\View */
/* @var $model common\models\CharacterMoving */

$this->title =  Yii::t('backend', 'Create Character Moving');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Character Movings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-moving-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
