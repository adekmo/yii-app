<?php
/* @var $this UserrController */
/* @var $model Userr */

$this->breadcrumbs=array(
	'Userrs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userr', 'url'=>array('index')),
	array('label'=>'Manage Userr', 'url'=>array('admin')),
);
?>

<h1>Create Userr</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>