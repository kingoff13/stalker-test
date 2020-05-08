<?php


/* @var $this yii\web\View */
/* @var $model common\models\CharacterInventory */

$this->title = Yii::t('backend', 'Update Character Inventory').': ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Character Inventories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="character-inventory-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
