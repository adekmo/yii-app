<?php
/* @var $this TindakannController */
/* @var $model Tindakann */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tindakan'); ?>
		<?php echo $form->textField($model,'id_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_tindakan'); ?>
		<?php echo $form->textField($model,'nama_tindakan',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->