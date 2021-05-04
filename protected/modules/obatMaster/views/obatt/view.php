<?php
/* @var $this ObattController */
/* @var $model Obatt */

$this->breadcrumbs=array(
	'Obatts'=>array('index'),
	$model->id_obat,
);

$this->menu=array(
	array('label'=>'List Obatt', 'url'=>array('index')),
	array('label'=>'Create Obatt', 'url'=>array('create')),
	array('label'=>'Update Obatt', 'url'=>array('update', 'id'=>$model->id_obat)),
	array('label'=>'Delete Obatt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_obat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obatt', 'url'=>array('admin')),
);
?>

<h1>View Obatt #<?php echo $model->id_obat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_obat',
		'nama_obat',
		'jumlah_obat',
		'harga',
	),
)); ?>
