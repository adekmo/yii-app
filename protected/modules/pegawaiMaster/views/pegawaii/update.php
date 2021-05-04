<?php
/* @var $this PegawaiiController */
/* @var $model Pegawaii */

$this->breadcrumbs=array(
	'Pegawaiis'=>array('index'),
	$model->id_pegawai=>array('view','id'=>$model->id_pegawai),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pegawaii', 'url'=>array('index')),
	array('label'=>'Create Pegawaii', 'url'=>array('create')),
	array('label'=>'View Pegawaii', 'url'=>array('view', 'id'=>$model->id_pegawai)),
	array('label'=>'Manage Pegawaii', 'url'=>array('admin')),
);
?>

<h1>Update Pegawaii <?php echo $model->id_pegawai; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>