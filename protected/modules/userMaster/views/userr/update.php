<?php
/* @var $this UserrController */
/* @var $model Userr */

$this->breadcrumbs=array(
	'Userrs'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userr', 'url'=>array('index')),
	array('label'=>'Create Userr', 'url'=>array('create')),
	array('label'=>'View Userr', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage Userr', 'url'=>array('admin')),
);
?>

<h1>Update Userr <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>