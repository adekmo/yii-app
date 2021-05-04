<?php
/* @var $this TindakannController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tindakanns',
);

$this->menu=array(
	array('label'=>'Create Tindakann', 'url'=>array('create')),
	array('label'=>'Manage Tindakann', 'url'=>array('admin')),
);
?>

<h1>Tindakanns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
