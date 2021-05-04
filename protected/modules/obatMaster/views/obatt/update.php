<?php
/* @var $this ObattController */
/* @var $model Obatt */

$this->breadcrumbs=array(
	'Obatts'=>array('index'),
	$model->id_obat=>array('view','id'=>$model->id_obat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obatt', 'url'=>array('index')),
	array('label'=>'Create Obatt', 'url'=>array('create')),
	array('label'=>'View Obatt', 'url'=>array('view', 'id'=>$model->id_obat)),
	array('label'=>'Manage Obatt', 'url'=>array('admin')),
);
?>

<h1>Update Obatt <?php echo $model->id_obat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>