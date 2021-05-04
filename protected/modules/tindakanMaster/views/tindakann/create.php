<?php
/* @var $this TindakannController */
/* @var $model Tindakann */

$this->breadcrumbs=array(
	'Tindakanns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tindakann', 'url'=>array('index')),
	array('label'=>'Manage Tindakann', 'url'=>array('admin')),
);
?>

<h1>Create Tindakann</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>