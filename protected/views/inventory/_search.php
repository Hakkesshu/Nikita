<?php
/* @var $this InventoryController */
/* @var $model Inventory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'inventoryId'); ?>
		<?php echo $form->textField($model,'inventoryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'movieId'); ?>
		<?php echo $form->textField($model,'movieId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stockNum'); ?>
		<?php echo $form->textField($model,'stockNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchaseDate'); ?>
		<?php echo $form->textField($model,'purchaseDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->