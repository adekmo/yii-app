<?php
/* @var $this PegawaiiController */
/* @var $model Pegawaii */

$this->breadcrumbs=array(
	'Pegawaiis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pegawaii', 'url'=>array('index')),
	array('label'=>'Manage Pegawaii', 'url'=>array('admin')),
);
?>

<h1>Create Pegawaii</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>