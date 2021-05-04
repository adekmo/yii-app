<?php
/* @var $this TindakannController */
/* @var $model Tindakann */

$this->breadcrumbs=array(
	'Tindakanns'=>array('index'),
	$model->id_tindakan=>array('view','id'=>$model->id_tindakan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tindakann', 'url'=>array('index')),
	array('label'=>'Create Tindakann', 'url'=>array('create')),
	array('label'=>'View Tindakann', 'url'=>array('view', 'id'=>$model->id_tindakan)),
	array('label'=>'Manage Tindakann', 'url'=>array('admin')),
);
?>

<h1>Update Tindakann <?php echo $model->id_tindakan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>