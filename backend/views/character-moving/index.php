<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CharacterMovingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Character Movings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-moving-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Character Moving', ['create'], ['class' => 'btn btn-success']) ?>
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
//            'location_id',
            [
                'attribute' => 'location.name',
                'label' => Yii::t('backend', 'Location'),
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a($model->location->name, ['location/view', 'id' => $model->location_id]);
                }
            ],
            'visit_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
