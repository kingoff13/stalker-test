<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CharacterInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Character Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-inventory-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Character Inventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'character_id',
            'thing_id',
            'used',
            'location',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
