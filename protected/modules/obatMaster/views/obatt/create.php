<?php
/* @var $this ObattController */
/* @var $model Obatt */

$this->breadcrumbs=array(
	'Obatts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obatt', 'url'=>array('index')),
	array('label'=>'Manage Obatt', 'url'=>array('admin')),
);
?>

<h1>Create Obatt</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>