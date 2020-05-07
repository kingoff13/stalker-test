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
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'character_id',
            'location_id',
            'visit_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
