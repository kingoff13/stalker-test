<?php

use common\models\enums\ThingLocationEnum;
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
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'character_id',
            [
                'attribute' => 'character.name',
                'label' => Yii::t('backend', 'Character'),
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a($model->character->name, ['character/view', 'id' => $model->character_id]);
                }
            ],
//            'thing_id',
            [
                'attribute' => 'thing.name',
                'label' => Yii::t('backend', 'Thing'),
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a($model->thing->name, ['thing/view', 'id' => $model->thing->id]);
                }
            ],
            'used',
            [
                'attribute' => 'location',
                'label' => Yii::t('backend', 'Location'),
                'format' => 'html',
                'value' => function ($model) {
                    return ThingLocationEnum::getLabel($model->location);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
