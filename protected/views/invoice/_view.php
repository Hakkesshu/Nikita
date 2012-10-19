<?php
/* @var $this InvoiceController */
/* @var $data Invoice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->invoiceId), array('view', 'id'=>$data->invoiceId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockNum')); ?>:</b>
	<?php echo CHtml::encode($data->stockNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerNum')); ?>:</b>
	<?php echo CHtml::encode($data->customerNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceNum')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rentalDate')); ?>:</b>
	<?php echo CHtml::encode($data->rentalDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dueDate')); ?>:</b>
	<?php echo CHtml::encode($data->dueDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rentalPrice')); ?>:</b>
	<?php echo CHtml::encode($data->rentalPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rentalStatus')); ?>:</b>
	<?php echo CHtml::encode($data->rentalStatus); ?>
	<br />

	*/ ?>

</div>