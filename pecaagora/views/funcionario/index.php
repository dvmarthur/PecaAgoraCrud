<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuncionarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funcionarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Funcionario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cargo_id',
            'name',
            'cpf',
            'logradouro',
            //'cep',
            //'cidade',
            //'estado',
            //'numero',
            //'complemento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Funcionario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
