<?php
/* @var $this InventoryController */
/* @var $model Inventory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventory-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'movieId'); ?>
		<?php echo $form->textField($model,'movieId'); ?>
		<?php echo $form->error($model,'movieId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockNum'); ?>
		<?php echo $form->textField($model,'stockNum'); ?>
		<?php echo $form->error($model,'stockNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseDate'); ?>
		<?php echo $form->textField($model,'purchaseDate'); ?>
		<?php echo $form->error($model,'purchaseDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->