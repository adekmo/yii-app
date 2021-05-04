<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pegawais',
);

$this->menu=array(
	array('label'=>'Aksi Admin', 'url'=>array('admin')),
);
?>

<h1>Pegawais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
