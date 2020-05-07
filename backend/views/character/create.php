<?php


/* @var $this yii\web\View */
/* @var $model common\models\Character */

$this->title = 'Create Character';
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
