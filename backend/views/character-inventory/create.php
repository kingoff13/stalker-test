<?php



/* @var $this yii\web\View */
/* @var $model common\models\CharacterInventory */

$this->title = 'Create Character Inventory';
$this->params['breadcrumbs'][] = ['label' => 'Character Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-inventory-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
