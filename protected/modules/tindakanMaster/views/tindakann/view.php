<?php
/* @var $this TindakannController */
/* @var $model Tindakann */

$this->breadcrumbs=array(
	'Tindakanns'=>array('index'),
	$model->id_tindakan,
);

$this->menu=array(
	array('label'=>'List Tindakann', 'url'=>array('index')),
	array('label'=>'Create Tindakann', 'url'=>array('create')),
	array('label'=>'Update Tindakann', 'url'=>array('update', 'id'=>$model->id_tindakan)),
	array('label'=>'Delete Tindakann', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tindakan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tindakann', 'url'=>array('admin')),
);
?>

<h1>View Tindakann #<?php echo $model->id_tindakan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tindakan',
		'nama_tindakan',
	),
)); ?>
