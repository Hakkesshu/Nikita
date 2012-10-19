<?php
/* @var $this InventoryController */
/* @var $data Inventory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventoryId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->inventoryId), array('view', 'id'=>$data->inventoryId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movieId')); ?>:</b>
	<?php echo CHtml::encode($data->movieId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockNum')); ?>:</b>
	<?php echo CHtml::encode($data->stockNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchaseDate')); ?>:</b>
	<?php echo CHtml::encode($data->purchaseDate); ?>
	<br />


</div>