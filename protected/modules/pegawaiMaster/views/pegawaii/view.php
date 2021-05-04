<?php
/* @var $this PegawaiiController */
/* @var $model Pegawaii */

$this->breadcrumbs=array(
	'Pegawaiis'=>array('index'),
	$model->id_pegawai,
);

$this->menu=array(
	array('label'=>'List Pegawaii', 'url'=>array('index')),
	array('label'=>'Create Pegawaii', 'url'=>array('create')),
	array('label'=>'Update Pegawaii', 'url'=>array('update', 'id'=>$model->id_pegawai)),
	array('label'=>'Delete Pegawaii', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pegawai),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pegawaii', 'url'=>array('admin')),
);
?>

<h1>View Pegawaii #<?php echo $model->id_pegawai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pegawai',
		'nama_pegawai',
		'jabatan',
		'alamat',
	),
)); ?>
