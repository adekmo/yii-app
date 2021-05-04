<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Create Obat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'obat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_obat',
		'nama_obat',
		'jumlah_obat',
		'harga',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>