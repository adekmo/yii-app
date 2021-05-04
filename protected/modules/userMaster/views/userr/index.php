<?php
/* @var $this UserrController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Userrs',
);

$this->menu=array(
	array('label'=>'Create Userr', 'url'=>array('create')),
	array('label'=>'Manage Userr', 'url'=>array('admin')),
);
?>

<h1>Userrs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
