<?php
/* @var $this TindakanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tindakans',
);

$this->menu=array(
	array('label'=>'Aksi Admin', 'url'=>array('admin')),
);
?>

<h1>Tindakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
