<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Create Pegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pegawai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pegawai',
		'nama_pegawai',
		'jabatan',
		'alamat',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>