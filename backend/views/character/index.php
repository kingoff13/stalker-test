<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii2mod\editable\EditableColumn;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CharacterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Characters');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('backend', 'Create Character'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name',
            [
                'class' => EditableColumn::class,
                'attribute' => 'name',
                'url' => ['change-name'],
            ],
//            'killed',
            [
                'class' => EditableColumn::class,
                'attribute' => 'killed',
                'url' => ['change-killed'],
            ],
//            'clan',
            [
                'class' => EditableColumn::class,
                'attribute' => 'clan',
                'url' => ['change-clan'],
            ],
//            'password_hash',
            'created_at:datetime',
            // 'logged_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
