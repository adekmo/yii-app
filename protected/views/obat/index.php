<?php
/* @var $this ObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obats',
);

$this->menu=array(

	array('label'=>'Aksi Admin', 'url'=>array('admin')),
);
?>

<h1>Daftar Obat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
