<?php
/* @var $this InvoiceController */
/* @var $model Invoice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'invoiceId'); ?>
		<?php echo $form->textField($model,'invoiceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stockNum'); ?>
		<?php echo $form->textField($model,'stockNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerNum'); ?>
		<?php echo $form->textField($model,'customerNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoiceNum'); ?>
		<?php echo $form->textField($model,'invoiceNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rentalDate'); ?>
		<?php echo $form->textField($model,'rentalDate',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rentalPrice'); ?>
		<?php echo $form->textField($model,'rentalPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rentalStatus'); ?>
		<?php echo $form->textField($model,'rentalStatus',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->