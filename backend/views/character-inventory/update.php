<?php


/* @var $this yii\web\View */
/* @var $model common\models\CharacterInventory */

$this->title = 'Update Character Inventory: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Character Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="character-inventory-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
