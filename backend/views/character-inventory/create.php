<?php



/* @var $this yii\web\View */
/* @var $model common\models\CharacterInventory */

$this->title = Yii::t('backend', 'Create Character Inventory');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Character Inventories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-inventory-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
