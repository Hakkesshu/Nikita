<?php
/* @var $this InvoiceController */
/* @var $model Invoice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoice-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stockNum'); ?>
		<?php echo $form->textField($model,'stockNum'); ?>
		<?php echo $form->error($model,'stockNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customerNum'); ?>
		<?php echo $form->textField($model,'customerNum'); ?>
		<?php echo $form->error($model,'customerNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiceNum'); ?>
		<?php echo $form->textField($model,'invoiceNum'); ?>
		<?php echo $form->error($model,'invoiceNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rentalDate'); ?>
		<?php echo $form->textField($model,'rentalDate',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rentalDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rentalPrice'); ?>
		<?php echo $form->textField($model,'rentalPrice'); ?>
		<?php echo $form->error($model,'rentalPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rentalStatus'); ?>
		<?php echo $form->textField($model,'rentalStatus',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rentalStatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->