<?php
use common\models\MyPengguna;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;
use yii\helpers\Html;

#echo __FILE__;

?>

<p>
	<?= Html::a('Create My Pengguna', ['create'], ['class' => 'btn btn-primary']) ?>
</p>

<?php

echo GridView::widget([
	'dataProvider' => $dataProvider,
	'columns' => [
		['class' => 'yii\grid\SerialColumn'],

		'username',
		'email:email',
		'status',
		[
			'attribute' => 'created_at',
			'label' => 'Tarikh Daftar',
			'value' => function($model) {
				return date('d/m/Y H:i:s', $model->
					created_at);	
			}],
	
		[
			'attribute' => 'updated_at',
			#'enableSorting' => true,
			'label' => 'Tarikh Kemaskini',
			'value' => function($model) {
				return date('d/m/Y H:i:s', $model->
					updated_at);	
			}],
	[
		'attribute' => 'supervisor',
		'label' => 'Penyelia',

		'value' => function($model) {
			return (
				$model->supervisor == null 
				? null
				: $model->supervisor0->username
					.'-'
					.($model->supervisor0->supervisor == null
						? null
						:$model->supervisor0->supervisor0->username
					)
				);
		}
	 ],
	],
]);