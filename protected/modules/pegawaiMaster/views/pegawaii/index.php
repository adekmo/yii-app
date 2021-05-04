<?php
/* @var $this PegawaiiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pegawaiis',
);

$this->menu=array(
	array('label'=>'Create Pegawaii', 'url'=>array('create')),
	array('label'=>'Manage Pegawaii', 'url'=>array('admin')),
);
?>

<h1>Pegawaiis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
