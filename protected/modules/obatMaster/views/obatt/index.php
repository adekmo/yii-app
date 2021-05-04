<?php
/* @var $this ObattController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obatts',
);

$this->menu=array(
	array('label'=>'Create Obatt', 'url'=>array('create')),
	array('label'=>'Manage Obatt', 'url'=>array('admin')),
);
?>

<h1>Obatts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
