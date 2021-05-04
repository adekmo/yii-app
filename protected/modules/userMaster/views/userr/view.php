<?php
/* @var $this UserrController */
/* @var $model Userr */

$this->breadcrumbs=array(
	'Userrs'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List Userr', 'url'=>array('index')),
	array('label'=>'Create Userr', 'url'=>array('create')),
	array('label'=>'Update Userr', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete Userr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userr', 'url'=>array('admin')),
);
?>

<h1>View Userr #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'user_name',
		'level',
		'nama',
		'password',
		'email',
	),
)); ?>
